<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveCodingController extends Controller
{
    public function index()
    {
        return view('live-coding');
    }

    public function execute(Request $request)
    {
        $code = $request->input('code');
        $output = $this->runPythonCode($code);

        return response()->json(['output' => $output]);
    }

    private function runPythonCode($code)
    {
        // Simulasi eksekusi kode Python secara sederhana
        $file = tempnam(sys_get_temp_dir(), 'py');
        file_put_contents($file, $code);

        // Menjalankan file Python yang baru saja dibuat
        $command = escapeshellcmd("python3 $file");
        $output = shell_exec($command);

        // Menghapus file sementara
        unlink($file);

        return $output;
    }
}
