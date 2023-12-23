<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function showForm()
    {
        $randomText = $this->generateRandomText();
        session(['captcha_text' => $randomText]);

        return view('captcha.form', ['randomText' => $randomText]);
    }

    public function processForm(Request $request)
{
    $request->validate([
        'captcha' => 'required',
        'captcha_text' => 'required',
    ]);

    $userInput = $request->input('captcha');
    $captchaText = $request->input('captcha_text');

    if ($userInput === $captchaText) {
        // Teks CAPTCHA benar, lanjutkan dengan pemrosesan formulir
        return 'Teks CAPTCHA benar. Formulir berhasil disubmit.';
    } else {
        // Teks CAPTCHA salah, tampilkan pesan kesalahan
        return 'Teks CAPTCHA salah. Silakan coba lagi.';
    }
}


    private function generateRandomText($length = 6)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $randomText = '';

        for ($i = 0; $i < $length; $i++) {
            $randomText .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomText;
    }
}
