<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
        P {
            margin-bottom: 3px;
        }

        table {
            width: 100%;
            margin-top: -15;
            border-collapse: collapse;

        }

        td {
            border: 1px solid black;
            padding: 5px 3px;
        }

        tr {
            text-align: center;
        }

        h3 {
            float: left;
            font-size: 12;
            font-weight: lighter;
            /* margin-bottom: auto; */
        }

        @page {
            size: auto;
            margin: 5mm;
        }

        /* Kop Surat */
        .kop {
            border-bottom: 5px solid black;
        }

        .rangkasurat {
            width: 980px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
        }

        .tengah {
            text-align: center;
        }

        /* isi */
        .isi {
            text-align: center;
        }
    </style>

    <title>print</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4;
            margin: 15mm 15mm 15mm 15mm;
        }
    </style>
</head>

<body class="A4">

    <section class="sheet padding-20mm" style="height: auto;">
        <table width="100%" class="kop">
            <tr>
                <td style="border:none;" width="30%">
                    <img src={{ asset('images/logo_dark.png') }} style="height:120px; width:120px; " alt="Your Picture">
                </td>
                <td width="70%" class="tengah" style="border:none;">
                    <center>
                        <p style="margin-bottom: -5px; font-size: 14px; font-weight:700 ">
                            BADAN USAHA MILIK DESA PUTRI NYALE KUTA
                        </p>
                        <p style="margin-bottom: -5px; font-size: 14px; font-weight:700 ">
                            DESA KUTA KECAMATAN PUJUT KABUPATEN LOMBOK TENGAH
                        </p>
                        <p style="margin-bottom: -5px; font-size: 12px;">
                            Alamat : Jln.Pariwisata Kuta – Sengkol,Desa Kuta Kec,Pujut Kab.Lombok Tengah
                        </p>
                    </center>
                </td>
            </tr>
        </table>
        <center>
            <br>
            <p style="margin-bottom: -5px; font-size: 18px; font-weight:900; margin-bottom: 25px;">
                LAPORAN KEUANGAN BUMDES
            </p>
        </center>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            1. BADAN USAHA MILIK DESA PUTRI NYALE KUTA
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal tahun 2018 &emsp;&emsp;&emsp;&emsp;= Rp. 102.000.000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Hasil percetakan &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&nbsp; = Rp. 0
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Pengeluaran &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&nbsp; = Rp. 0
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Total pendapatan tahun 2020 &emsp;&ensp;&nbsp; = Rp. 0
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            e. Jadi untung bersih percetakan = Rp. 0
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            2. UNIT USAHA SIMPEN PINJAM
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp.38.000.000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Pendapatan bunga dari Tahun 2019 s/d 2020 = Rp.7,382,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Perputaran modal sampai saat ini sebesar = Rp. 95,300,000
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            3. UNIT USAHA PERDAGANGAN GAS ELPIJI 3 KG
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp. 84,300,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Pembelian Pick Up = Rp. 57,500,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Pembelian Tong Gas Elpiji 3 Kg = Rp. 28,800,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Hasil penjualan 2020 = Rp. 5,512,500
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            4. Unit Usaha Budidaya Ayam KUB
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp. 11,655,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Harga pembelian = Rp. 12,900,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Harga penjualan 2020 = Rp. 27,780,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Biaya Pakan = Rp. 12.005,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            e. Biaya kandang = Rp. 1,855,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            f. Jadi di unit usaha Ayam KUB mengalami ke untungan sebesar
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 25px; margin-bottom: 3px">
            = harga jual – (harga pembelian + biaya)
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 25px; margin-bottom: 3px">
            = Rp. 27,780,000 – (12,900,000 + 12.005,000 + 1,855,000 )
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 25px; margin-bottom: 3px">
            = Rp. 1,020,000
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            5. Unit usaha pengelolaan homestay
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp. 117,500,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Hasil jasa sewa homestay = Rp. 9,000,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Biaya honor clening service = Rp. 2,000,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Pendapatan unit usaha Homestay = Rp. 7,000,000
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            6. Unit usaha pengelolaan sampah
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp.3,000,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Pendapatan jasa angkut sampah = Rp. 3,280,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Biaya oprasional angkut sampah = Rp. 970,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Honor karyawan 9 orang = Rp. 2,310,000
        </p>


        

    </section>
</body>

</html>
