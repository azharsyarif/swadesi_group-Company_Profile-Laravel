<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CompanyProfileController extends Controller
{
        public function companyGroup()
    {
        // Menyiapkan data layanan
        $services = [
            [
                'title' => 'Swadesi Cipta Mandiri',
                'description' => 'Layanan pengiriman udara, darat, dan laut yang aman dan tepat waktu.',
                'image' => 'storage/images/cargo_1.jpg',
                'link' => '/swadesi-cipta-mandiri-id'
            ],
            [
                'title' => 'Swadesi Perdana Mandiri',
                'description' => 'Perdagangan barang dan jasa yang mencakup berbagai sektor industri, memastikan kualitas dan kepuasan pelanggan.',
                'image' => 'storage/images/cargo_1.jpg',
                'link' => '/swadesi-persada-mandiri'

            ],
            // Tambahkan lebih banyak layanan sesuai kebutuhan
        ];

        return view('companyGroup', compact('services'));
    }


    public function scmIndex()
    {
        return view('scm_CompanyProfile');
    }
    public function scmIndexEn()
    {
        return view('scm_CompanyProfile_EN');
    }

    public function spmIndex()
    {
        return view('spm_companyProfile');
    }

    public function SubmitEmailSPM(){
        $mail = new PHPMailer(true); // Buat instance PHPMailer

        try {
            // Konfigurasi server
            $mail->isSMTP(); // Menggunakan SMTP
            $mail->Host = 'smtp.example.com'; // Ganti dengan server SMTP Anda
            $mail->SMTPAuth = true; // Aktifkan otentikasi SMTP
            $mail->Username = 'your_email@example.com'; // Ganti dengan email Anda
            $mail->Password = 'your_password'; // Ganti dengan password email Anda
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Atau PHPMailer::ENCRYPTION_SMTPS
            $mail->Port = 587; // Port SMTP (587 untuk TLS, 465 untuk SSL)

            // Pengaturan pengirim dan penerima
            $mail->setFrom('@example.com', 'Your Name'); // Ganti dengan email dan nama Anda
            $mail->addAddress($request->input('email'), $request->input('name')); // Menggunakan input dari form

            // Konten email
            $mail->isHTML(true); // Mengatur format email ke HTML
            $mail->Subject = 'Subject of the email';
            $mail->Body    = '<h1>This is the HTML message body</h1>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send(); // Mengirim email
            return response()->json(['message' => 'Email has been sent']);
        } catch (Exception $e) {
            return response()->json(['error' => "Email could not be sent. Mailer Error: {$mail->ErrorInfo}"], 500);
        }
    }
}
