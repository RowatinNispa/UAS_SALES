<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class whatsapp extends CI_Controller {

    public function kirim_notifikasi($id)
{
    $this->db->select('
        peminjaman.*,
        anggota.nama,
        anggota.no_hp
    ');

    $this->db->from('peminjaman');

    $this->db->join(
        'anggota',
        'anggota.id = peminjaman.anggota_id'
    );

    //berdasarkan id peminjaman
    $this->db->where('peminjaman.id', $id);

    $d = $this->db->get()->row();

    if(!$d){
        show_404();
    }

    $today = date('Y-m-d');

    $selisih = strtotime($today) - strtotime($d->tanggal_jatuh_tempo);

    $terlambat = $selisih > 0
        ? floor($selisih / 86400)
        : 0;
    
    // hanya kirim jika telat
    if($terlambat > 0){

        $pesan =
        "Hello ".$d->nama.",".
        "Anda terlambat mengembalikan buku selama".
        $terlambat." hari. ".
        "Mohon segera dikembalikan ke perpustakaan.";

        $this->kirim_wa(
            $d->no_hp,
            $pesan
        );

        $this->session->set_flashdata(
            'success',
            'Notifikasi WA berhenti dikirim'
        );
    }else {
        
        $this->session->set_flashdata(
            'error',
            'anggota belum terlambat'
        );
    }

    redirect('peminjaman');
}
    // =========================================
    // FUNCTION KIRIM WA
    // =========================================
    private function kirim_wa($target, $message)
    {

        $token = "A5DeYMjkxCZRm6cRdoRw";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => array(
                'target' => $target,
                'message' => $message,
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}