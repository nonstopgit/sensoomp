<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/vagrant/code/sensomp/themes/senso/partials/site/gmaps.htm */
class __TwigTemplate_7ec4f1fcbe4b42463a0ed5b0f8147cefc44756244f4fd9c1ff59a16f77cabf4e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"map\">
</div>
<style>
#map {
    width: 100%;
    height: 600px;
    background-color: #3b3b41;
}
</style>
<script>
  function initMap() {
    var myLatlng = {lat: 45.806611, lng: 15.162828};
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatlng,
      zoom: 16,
      styles:
        [
          {
              \"featureType\": \"all\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"saturation\": \"-100\"
                  }
              ]
          },
          {
              \"featureType\": \"administrative\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"on\"
                  }
              ]
          },
          {
              \"featureType\": \"landscape\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"on\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.attraction\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.business\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.government\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.medical\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.school\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          }
      ]
    });
    var marker = new google.maps.Marker({position: myLatlng, map: map});
    /*map.setTilt(45);*/
  }
</script>
<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDPW1aZx0FhSpBaVgfrWR8FnQ_PkvpB7MU&callback=initMap\"></script>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/sensomp/themes/senso/partials/site/gmaps.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"map\">
</div>
<style>
#map {
    width: 100%;
    height: 600px;
    background-color: #3b3b41;
}
</style>
<script>
  function initMap() {
    var myLatlng = {lat: 45.806611, lng: 15.162828};
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatlng,
      zoom: 16,
      styles:
        [
          {
              \"featureType\": \"all\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"saturation\": \"-100\"
                  }
              ]
          },
          {
              \"featureType\": \"administrative\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"on\"
                  }
              ]
          },
          {
              \"featureType\": \"landscape\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"on\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.attraction\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.business\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.government\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.medical\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.school\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          }
      ]
    });
    var marker = new google.maps.Marker({position: myLatlng, map: map});
    /*map.setTilt(45);*/
  }
</script>
<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDPW1aZx0FhSpBaVgfrWR8FnQ_PkvpB7MU&callback=initMap\"></script>", "/home/vagrant/code/sensomp/themes/senso/partials/site/gmaps.htm", "");
    }
}
