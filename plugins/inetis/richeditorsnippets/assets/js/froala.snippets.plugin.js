(function ($) {
    // Adds snippets to the default Froala buttons
    // Places it after the quote button to keep dropdowns together
    $.oc.richEditorButtons.splice(3, 0, 'snippets');

    // Define a dropdown button.
    $.FroalaEditor.RegisterCommand('snippets', {
        // Button title.
        title: 'Snippets',

        // Mark the button as a dropdown.
        type: 'dropdown',

        // Specify the icon for the button.
        // If this option is not specified, the button name will be used.
        icon: '<i class="icon-newspaper-o"></i>',

        // The dropdown HTML
        html: function() {
            if ($.oc.snippets) {
                var html = '<ul class="fr-dropdown-list">';
                $.each($.oc.snippets, function(i, snippet) {
                    html += '<li><a class="fr-command" data-cmd="snippets" data-param1="' + snippet.snippet + '" title="' + snippet.name + '">' + snippet.name + '</a></li>';
                });

                return html + '</ul>';
            }
            else {
                return '<div style="padding:10px;">No snippets are currently defined.</div>';
            }
        },

        // Save the dropdown action into undo stack.
        undo: true,

        // Focus inside the editor before callback.
        focus: true,

        // Refresh the button state after the callback.
        refreshAfterCallback: true,

        // Callback.
        callback: function (cmd, val, params) {
            var options = $.oc.snippets[val];

            if (options) {
                var $editor = this.$el.parents('[data-control="richeditor"]'),
                    $snippetNode = $('<figure contenteditable="false" data-inspector-css-class="hero">&nbsp;</figure>');

                if (options.component) {
                    $snippetNode.attr({
                        'data-component': options.component,
                        'data-inspector-class': options.component
                    })

                    // If a component-based snippet was added, make sure that
                    // its code is unique, as it will be used as a component
                    // alias.

                    /*
                    // Init a new snippet manager

                    // Below code reattaches the inspector event, causing duplicate inspector options
                    // Until I can figure a solution, I have copied the code to this file...

                    var snippetManager = new $.oc.pages.snippetManager;
                    options.snippet = snippetManager.generateUniqueComponentSnippetCode(options.component, options.snippet, $editor.parent())
                    */

                    options.snippet = generateUniqueComponentSnippetCode(options.component, options.snippet, $editor.parent());
                }

                $snippetNode.attr({
                    'data-snippet': options.snippet,
                    'data-name': options.name,
                    'tabindex': '0',
                    'draggable': 'true',
                    'data-ui-block': 'true'
                })

                $snippetNode.addClass('fr-draggable');

                // Insert the content
                $editor.richEditor('insertUiBlock', $snippetNode)
            }

        }
    });

    generateUniqueComponentSnippetCode = function(componentClass, originalCode, $pageForm) {
        var updatedCode = originalCode,
            counter = 1,
            snippetFound = false

        do {
            snippetFound = false

            $('[data-control="richeditor"] textarea', $pageForm).each(function() {
                var $textarea = $(this),
                    $codeDom = $('<div>' + $textarea.val() + '</div>')

                if ($codeDom.find('[data-snippet="'+updatedCode+'"][data-component]').length > 0) {
                    snippetFound = true
                    updatedCode = originalCode + counter
                    counter++

                    return false
                }
            })

        } while (snippetFound)

        return updatedCode
    }


})(jQuery);

$(window).on('load', function() {
    var $editor = $('[data-control="richeditor"]');

    if ($.oc.pagesPage && !window.location.pathname.includes('rainlab/pages')) {
        $.oc.pagesPage.snippetManager.initSnippets($editor);
    }
});