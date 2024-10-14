<?php
class Mahasiswa_Afinudin
{
    protected $nama_0060;
    protected $nim_0060;
    protected $jurusan_0060;
    protected $ipk_0060;
    protected $semester_0060;
    protected $jenjang_0060;

    public function __construct($nama_0060, $nim_0060, $jurusan_0060, $ipk_0060, $semester_0060, $jenjang_0060)
    {
        $this->nama_0060 = $nama_0060;
        $this->nim_0060 = $nim_0060;
        $this->jurusan_0060 = $jurusan_0060;
        $this->ipk_0060 = $ipk_0060;
        $this->semester_0060 = $semester_0060;
        $this->jenjang_0060 = $jenjang_0060;
    }

    public function tampilkanInfo_0060()
    {
        echo "Nama: <strong>" . $this->nama_0060 . "</strong><br>";
        echo "NIM: <strong>" . $this->nim_0060 . "</strong><br>";
        echo "Jurusan: <strong>" . $this->jurusan_0060 . "</strong><br>";
        echo "IPK: <strong>" . $this->ipk_0060 . "</strong><br>";
        echo "Semester: <strong>" . $this->semester_0060 . "</strong><br>";
        echo "Jenjang Pendidikan: <strong>" . $this->jenjang_0060 . "</strong><br>";
    }

    public function cekKelulusan_0060()
    {
        if ($this->ipk_0060 >= 2.75 && $this->cekSyaratKelulusan_0060()) {
            echo "<strong>" . $this->nama_0060 . "</strong> dinyatakan lulus.<br>";
        } else {
            echo "<strong>" . $this->nama_0060 . "</strong> belum lulus.<br>";
        }
    }

    public function cekSyaratKelulusan_0060()
    {
        return false;
    }

    public function hitungSks_0060($sksPerSemester_0060)
    {
        $totalSks_0060 = $sksPerSemester_0060 * $this->semester_0060;
        echo "<strong>" . $this->nama_0060 . "</strong> telah menempuh total <strong>" . $totalSks_0060 . " SKS</strong>.<br>";
    }
}

class MahasiswaD3_0060 extends Mahasiswa_Afinudin
{
    public function __construct($nama_0060, $nim_0060, $jurusan_0060, $ipk_0060, $semester_0060)
    {
        parent::__construct($nama_0060, $nim_0060, $jurusan_0060, $ipk_0060, $semester_0060, "D3");
    }

    public function cekSyaratKelulusan_0060()
    {
        return $this->semester_0060 >= 6;
    }

    public function menyelesaikanProyekAkhir_0060()
    {
        echo "<strong>" . $this->nama_0060 . "</strong> (Mahasiswa D3) sedang menyelesaikan Proyek Akhir.<br>";
    }
}

class MahasiswaS1_0060 extends Mahasiswa_Afinudin
{
    public function __construct($nama_0060, $nim_0060, $jurusan_0060, $ipk_0060, $semester_0060)
    {
        parent::__construct($nama_0060, $nim_0060, $jurusan_0060, $ipk_0060, $semester_0060, "S1");
    }

    public function cekSyaratKelulusan_0060()
    {
        return $this->semester_0060 >= 8;
    }

    public function menyelesaikanSkripsi_0060()
    {
        echo "<strong>" . $this->nama_0060 . "</strong> (Mahasiswa S1) sedang menyelesaikan Skripsi.<br>";
    }
}

$mahasiswaD3_0060 = new MahasiswaD3_0060("Abror", "231200050", "Komputerasisasi Akuntansi", 3.8, 6);
$mahasiswaS1_0060 = new MahasiswaS1_0060("Afinudin", "232300060", "Bisnis Digital", 3.8, 7);

$mahasiswaD3_0060->tampilkanInfo_0060();
$mahasiswaD3_0060->cekKelulusan_0060();
$mahasiswaD3_0060->hitungSks_0060(22);
$mahasiswaD3_0060->menyelesaikanProyekAkhir_0060();

echo "<br>";

$mahasiswaS1_0060->tampilkanInfo_0060();
$mahasiswaS1_0060->cekKelulusan_0060();
$mahasiswaS1_0060->hitungSks_0060(24);
$mahasiswaS1_0060->menyelesaikanSkripsi_0060();
