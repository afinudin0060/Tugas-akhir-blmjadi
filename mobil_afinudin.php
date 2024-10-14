<?php
class Mobil_Afinudin
{
    public $nama_0060;
    public $merk_0060;

    public function __construct($nama_0060, $merk_0060)
    {
        $this->nama_0060 = $nama_0060;
        $this->merk_0060 = $merk_0060;
    }

    public function tampilkanInfo_0060()
    {
        echo "Nama Mobil: <strong>$this->nama_0060</strong><br>";
        echo "Merk: <strong>$this->merk_0060</strong><br>";
    }
}

class MobilSport_0060 extends Mobil_Afinudin
{
    public $kecepatan_0060;
    public $turbo_0060;

    public function __construct($nama_0060, $merk_0060, $kecepatan_0060, $turbo_0060)
    {
        parent::__construct($nama_0060, $merk_0060);
        $this->kecepatan_0060 = $kecepatan_0060;
        $this->turbo_0060 = $turbo_0060;
    }

    public function tampilkanInfo_0060()
    {
        parent::tampilkanInfo_0060();
        echo "Kecepatan: <strong>$this->kecepatan_0060 km/h</strong><br>";
        echo "Turbo: <strong>$this->turbo_0060</strong><br>";
    }
}

class CityCar_0060 extends Mobil_Afinudin
{
    public $model_0060;
    public $irit_0060;
    public $sensor_0060;

    public function __construct($nama_0060, $merk_0060, $model_0060, $irit_0060, $sensor_0060)
    {
        parent::__construct($nama_0060, $merk_0060);
        $this->model_0060 = $model_0060;
        $this->irit_0060 = $irit_0060;
        $this->sensor_0060 = $sensor_0060;
    }

    public function tampilkanInfo_0060()
    {
        parent::tampilkanInfo_0060();
        echo "Model: <strong>$this->model_0060</strong><br>";
        echo "Irit Bahan Bakar: <strong>$this->irit_0060</strong><br>";
        echo "Sensor: <strong>$this->sensor_0060</strong><br>";
    }
}

$mobilSport_0060 = new MobilSport_0060("Skyline GTR", "Nissan", 350, "Yes");
$mobilSport_0060->tampilkanInfo_0060();

echo "<br>";

$cityCar_0060 = new CityCar_0060("Supra", "Toyota", "2022", "Sangat Irit", "Teratur");
$cityCar_0060->tampilkanInfo_0060();
