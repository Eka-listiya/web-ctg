<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Pasien;
use App\Sensor;
use Exception;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
        public static $counter = 0;

        public function insertSensor(Request $request)
        {
            $currentMonitoring = $this->getTotalPemeriksaan();

            if (self::$counter == 0) {
                $pasien = Pasien::find(1);

                $isLaporanEmpty = count($pasien->laporans()->get()->toArray()) == 0;

                if ($isLaporanEmpty && $request->exists(['fhr', 'toco'])) {
                    $pasien->update([
                        'total_pemeriksaan' => $currentMonitoring + 1
                    ]);

                    $pasien->laporans()->create([
                        'id_patient' => 1,
                        'kode_pemeriksaan' => rand(1, 9999999),
                        'tanggal' => '20-20-17',
                        'waktu' => '16:00'
                    ]);

                    return response()->json([
                        "code" => 200,
                        "pesan" => "Laporan Pertama Berhasi Dibuat"
                    ]);
                    return;
                } else if ($request->exists(['fhr', 'toco'])) {
                    Sensor::create([
                        'id_laporan' => 1,
                        'fhr' => $request->fhr,
                        'toco' => $request->toco
                    ]);
                    return response()->json([
                        "code" => 200,
                        "pesan" => "insert data berhasil"
                    ]);
                }
            }

        // if ($currentMonitoring != null) {
        //     Sensor::create([
        //         'id_pemeriksaan' => $currentMonitoring + 1,
        //         'fhr' => $request->fhr,
        //         'toco' => $request->toco
        //     ]);

        //     return response()->json([
        //         "code" => 200,
        //         "pesan" => "insert data berhasil"
        //     ]);
        // }

        return response()->json([
            "code" => 400,
            "pesan" => "insert data gagal"
        ]);
    }

    public function getTotalPemeriksaan()
    {
        $lastTotalMonitoring = Pasien::find(1)->toArray();
        return $lastTotalMonitoring['total_pemeriksaan'];
    }

    public function getRiwayatMonitoring(Request $request)
    {
        return 'get riwayat monitoring';
    }

    public function getDetailRiwayatMonitoring(Request $request)
    {
        return 'get detail riwayat monitoring';
    }
}
