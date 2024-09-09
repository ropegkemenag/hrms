<?php

namespace App\Controllers\Manajemen;

use App\Controllers\BaseController;
use App\Models\SimpegModel;

class Bkn extends BaseController
{
    public function index()
    {
        //
    }

    public function sendskp($start,$limit)
    {
      $model = new SimpegModel;
      $skp = $model->getskp2022();

      $request = \Config\Services::request();
      $client = \Config\Services::curlrequest();
      $url  = 'https://apimws.bkn.go.id:8243/api/1.0/skp22/save';

      foreach ($skp as $row) {

        $body = array(
          'hasilKinerjaNilai'=> (int) $row->HASIL_KERJA,
          'id'=>null,
          'kuadranKinerjaNilai'=> (int) $row->KUADRAN,
          'penilaiGolongan'=>$row->PENILAI_GOLONGAN_ID,
          'penilaiJabatan'=>$row->PENILAI_JABATAN_NM,
          'penilaiNama'=>$row->PENILAI_NAMA,
          'penilaiNipNrp'=>$row->NIP_NIK_PENILAI,
          'penilaiUnorNama'=>$row->PEGAWAI_ATASAN_UNOR_NAMA,
          'perilakuKerjaNilai'=> (int) $row->PERILAKU_KERJA,
          'pnsDinilaiOrang'=>$row->PNS_DINILAI_ID,
          'statusPenilai'=>$row->STATUS_PENILAI,
          'tahun'=>$row->TAHUN);

        $token = 'eyJ4NXQiOiJNell4TW1Ga09HWXdNV0kwWldObU5EY3hOR1l3WW1NNFpUQTNNV0kyTkRBelpHUXpOR00wWkdSbE5qSmtPREZrWkRSaU9URmtNV0ZoTXpVMlpHVmxOZyIsImtpZCI6Ik16WXhNbUZrT0dZd01XSTBaV05tTkRjeE5HWXdZbU00WlRBM01XSTJOREF6WkdRek5HTTBaR1JsTmpKa09ERmtaRFJpT1RGa01XRmhNelUyWkdWbE5nX1JTMjU2IiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiIxOTg3MDcyMjIwMTkwMzEwMDUiLCJhdXQiOiJBUFBMSUNBVElPTiIsImF1ZCI6Ik9xM05UQm0wb082Q2E3QmN4eGY3Y2Y0blRwRWEiLCJuYmYiOjE2NzQ3ODM1NDMsImF6cCI6Ik9xM05UQm0wb082Q2E3QmN4eGY3Y2Y0blRwRWEiLCJzY29wZSI6ImRlZmF1bHQiLCJpc3MiOiJodHRwczpcL1wvbG9jYWxob3N0Ojk0NDNcL29hdXRoMlwvdG9rZW4iLCJleHAiOjE2NzQ3ODcxNDMsImlhdCI6MTY3NDc4MzU0MywianRpIjoiYWNkZDQxNzgtZWUzOS00OWVmLWFmNjEtYWQ1MTNhNjdmMjZkIn0.j4xoRZlG_l27teEOMNOYjz5elHw7Q9z1fBhFIxPbFaIbNs3aiqVPAUlbFxmv8KsepWy44KX2Hxy7z-zmH5o91IO_QVnVl5iXlT1x_3Xz9eH1SCWTyfoAD_kkyNQu1F5Zps4-fNFwzIA4rioJ6zfJ8yqehhyoKA5NDnc0J2QWp1itZFry84NJ1qnDZ808U6tzw5piP4o0X3FGXg1IbSECL02SrcXo-sCOtOBB8ttwk_BXBI8RTVH70QN9chZXzZm8jcmSSD6Y82Tyr7606-e5W1N_8HsZJ-GY-GzUQslLAu5MzFKmJuvnJ5ZQ38CNZ5vKWYmX99QalV2A5vMsRFL-gA';
        $ssotoken = 'eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICJqSEVjQWFPcVFWemFYNGlVeExPVFJYb3lCSWp1a0Z3UHlZOFhtcTZhNkFrIn0.eyJleHAiOjE2NzQ4MTk1OTMsImlhdCI6MTY3NDc4MzU5MywianRpIjoiZGI3MjViNGYtN2E0Ny00NDMxLThkZTQtZWNiMjg4OTk0YjA2IiwiaXNzIjoiaHR0cHM6Ly9pYW0tc2lhc24uYmtuLmdvLmlkL2F1dGgvcmVhbG1zL3B1YmxpYy1zaWFzbiIsImF1ZCI6ImFjY291bnQiLCJzdWIiOiIxMzVlMDkyMy1iYWE2LTQ1NTMtOTU0Yi0zZjQwZTE5MzFiNjMiLCJ0eXAiOiJCZWFyZXIiLCJhenAiOiJrZW1lbmFndHJhaW5pbmciLCJzZXNzaW9uX3N0YXRlIjoiYmQxNGZkYTQtZjNkZi00OGM4LWFkZTQtYzE4NjgzMjU0OTc4IiwiYWNyIjoiMSIsInJlYWxtX2FjY2VzcyI6eyJyb2xlcyI6WyJyb2xlOnNpYXNuLWluc3RhbnNpOnBlcmVtYWphYW46b3BlcmF0b3IiLCJyb2xlOm1hbmFqZW1lbi13czpkZXZlbG9wZXIiLCJvZmZsaW5lX2FjY2VzcyIsInVtYV9hdXRob3JpemF0aW9uIl19LCJyZXNvdXJjZV9hY2Nlc3MiOnsiYWNjb3VudCI6eyJyb2xlcyI6WyJtYW5hZ2UtYWNjb3VudCIsIm1hbmFnZS1hY2NvdW50LWxpbmtzIiwidmlldy1wcm9maWxlIl19fSwic2NvcGUiOiJwcm9maWxlIGVtYWlsIiwiZW1haWxfdmVyaWZpZWQiOmZhbHNlLCJuYW1lIjoiREFOVVJJIERBTlVSSSIsInByZWZlcnJlZF91c2VybmFtZSI6IjE5ODcwNzIyMjAxOTAzMTAwNSIsImdpdmVuX25hbWUiOiJEQU5VUkkiLCJmYW1pbHlfbmFtZSI6IkRBTlVSSSIsImVtYWlsIjoiZGFudWFsYmFudGFuaUBnbWFpbC5jb20ifQ.gpJHih3rcVTJ5L9FdatIMVTuFMtxfWu55OVcAxHsiHs8rp87cevf4PIyDEDZK3-o8En_NJ5G3-TFfzaZyTV4AoOjzQ8bdl9Z-BOZG2N2Gh1HAv2C0WFoSKQk5mhPVGAfc7vobSaHzlWsVjpeWqkF6DmzihsbWtnBfMYJYH4fbTL1SDRtGJunfw_90ZIgIU1onn05yPz2LS5pX9hO0svup-1NThy2Jw3EGbl6Dg9fKVBI8gq1QTk-v6wN9Z5KMYF3fpkjUTpRcVxDEaQAzvXiQye9s1SxmBugQtyuYAgnXy8layCnx4VqgD1Zm1UKH42zynaAVIm7t12MWwseGYSiDg';

        $response = $client->setBody(json_encode($body))->request('POST', $url, [
          'headers' => [
              'Content-Type'  => 'application/json',
              'Authorization' => 'Bearer '. $token,
              'Auth'          => 'bearer '. $ssotoken,
          ],
          'verify' => false
        ]);

        $data = json_decode($response->getBody());

        if($data->message = 'success')
        {
          $skp = $model->updateskp2022($row->NIP,$row->TAHUN,1);
        }else{
          $skp = $model->updateskp2022($row->NIP,$row->TAHUN,2);
        }
        echo $data->message.'<br>';
        // print_r(json_encode($body));

      }
      $page = $limit+1;

      if($page < 1){
        return redirect()->to('/bkn/sendskp/0/'.$page);
      }
    }
}
