<?php
class Blender
{
   public $name = "";
   public $url = "";
   public $imageUrl = "";

   public function __construct($name, $url, $imageUrl)
   {
     $this->name = $name;
     $this->url = $url;
     $this->imageUrl = $imageUrl;
   }
}

$blenderArray = array();
$blenderArray[] = new Blender("Breville Blend Active ColourMix Family Blender", "https://www.argos.co.uk/product/8693873","./images/BrevilleFamilyBlender.webp");
$blenderArray[] = new Blender("Breville Blend Active 0.6L Personal Blender", "https://www.argos.co.uk/product/5548536","./images/BrevillePersonalBlender.webp");
$blenderArray[] = new Blender("Cookworks 2 Piece Personal Blender", "https://www.argos.co.uk/product/7062759","./images/CookWorksPersonalBlender.webp");
$blenderArray[] = new Blender("Kenwood BLP31.D0WG Blend-Xtract 3-in-1 Blender", "https://www.argos.co.uk/product/8132303","./images/KenwoodThreeInOneBlender.webp");
$blenderArray[] = new Blender("Ninja BN800UK Auto IQ Food Processor and Blender", "https://www.argos.co.uk/product/7912995","./images/NinjaFoodProcessor.webp");
$blenderArray[] = new Blender("Ninja BN750UK Auto IQ Multi Serve Blender", "https://www.argos.co.uk/product/8460893","./images/NinjaMultiServeBlender.webp");
$blenderArray[] = new Blender("Ninja QB3001UKS Slim Blender and Smoothie Maker", "https://www.argos.co.uk/product/1956926","./images/NinjaSlimAndSmoothieBlender.webp");
$blenderArray[] = new Blender("Nutribullet 900 Series Nutritional Blender", "https://www.argos.co.uk/product/6525675","./images/NutribulletBlender.webp");
$blenderArray[] = new Blender("NutriBullet Blender Combo", "https://www.argos.co.uk/product/8530455","./images/NutribulletComboOfBlenders.webp");
$blenderArray[] = new Blender("Philips Series 500 ProBlend Blender - Stainless Steel", "https://www.argos.co.uk/product/7482951","./images/PhilipsStainlessSteelBlender.webp");
$blenderArray[] = new Blender("Tefal BL82AD40 Perfect Mix Tritan Blender", "https://www.argos.co.uk/product/3034028","./images/TefalTritanBlender.webp");


function getWholeBlenderArray()
{
  include("connect.php");
  $query = "Select * FROM Blender";

  $results = $db->query($query);
  if (!$results)
  {
    die("Fatal Error");
  }
}



 ?>
