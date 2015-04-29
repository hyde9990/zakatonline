<?php

$page = $_GET['page'];
switch ($page) {
    default:
    case 'artikel_show': include 'artikel_show.php';
        break;
    case 'user_register': include 'user_register.php';
        break;
    case 'user_proses': include 'user_proses.php';
        break;
    case 'user_proses_notif': include 'user_proses_notif.php';
        break;    
    case 'artikel_detail': include 'artikel_detail.php';
        break;    
	case 'artikel_komentar_proses': include 'artikel_komentar_proses.php';
        break;		
	case 'bukutamu_isi': include 'bukutamu_isi.php';
        break;
	case 'bukutamu_proses_isi': include 'bukutamu_proses_isi.php';
        break;
	case 'bukutamu_proses_isi_notif': include 'bukutamu_proses_isi_notif.php';
        break;		
	case 'bukutamu_index': include 'bukutamu_index.php';
        break;				
	case 'user_cara_pembayaran': include 'user_cara_pembayaran.php';
        break;
	case 'user_cara_menjadi_user': include 'user_cara_menjadi_user.php';
        break;
	case 'zakat_simpanan': include 'zakat_simpanan.php';
        break;
	case 'zakat_hadiah': include 'zakat_hadiah.php';
        break;
	case 'zakat_emas_dan_perak': include 'zakat_emas_dan_perak.php';
        break;
	case 'zakat_fitrah': include 'zakat_fitrah.php';
        break;
	case 'zakat_profesi': include 'zakat_profesi.php';
        break;
	case 'zakat_type': include 'zakat_type.php';
        break;
	case 'history_zakat_online': include 'history_zakat_online.php';
        break;
	case 'aboutus_advocacy': include 'aboutus_advocacy.php';
        break;		
	case 'aboutus_visimisi': include 'aboutus_visimisi.php';
        break;				
	case 'aboutus_zakatguide': include 'aboutus_zakatguide.php';
        break;		
	case 'aboutus_zakatguide': include 'aboutus_zakatguide.php';
        break;	
	case 'penerima_register': include 'penerima_register.php';
        break;							
	case 'penerima_proses_selesai': include 'penerima_proses_selesai.php';
        break;	
	case 'tentang_kami': include 'tentang_kami.php';
        break;			
	case 'syarat_menjadi_penerima': include 'syarat_menjadi_penerima.php';
        break;					
										
		
}
?>