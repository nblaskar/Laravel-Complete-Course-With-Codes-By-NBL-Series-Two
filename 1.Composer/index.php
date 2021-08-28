<?php
require_once './vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
echo "<br>";
echo $faker->address;


?>