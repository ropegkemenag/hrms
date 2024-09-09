<?php
namespace App\Controllers\Master;

use CodeIgniter\Controller;
use OpenAI;

class Dbai extends Controller {
    private $openai;

    public function __construct() {
        $yourApiKey = getenv('OPEN_AI_KEY');
        $this->openai = OpenAI::client($yourApiKey);
    }

    public function index()
    {
      $yourApiKey = getenv('OPEN_AI_KEY');
      $client = OpenAI::client($yourApiKey);

      $result = $client->completions()->create([
          'model' => 'text-davinci-003',
          'max_tokens' => 100,
          'prompt' => 'Buatkan query SQL : jumlah pegawai berdasarkan agama dari tabel TEMP_PEGAWAI',
      ]);


      // print_r($result);

      $sqlQuery = $result['choices'][0]['text'];
      $sqlQuery = str_replace('`','',$sqlQuery);
      // echo $sqlQuery;

      // return false;

      $db = \Config\Database::connect();
      $result = $db->query($sqlQuery)->getResultArray();

      // Pass the result to the view
      $data['result'] = $result;
      return view('master/query_result', $data);
    }

    public function indexx() {
        return view('master/query_form');
    }

    public function processQuery() {
        $query = $this->request->getPost('query');

        // Convert natural language query to SQL using OpenAI
        $sqlQuery = $this->convertToSQL($query);

        // Execute the SQL query using CodeIgniter's database service
        $db = \Config\Database::connect();
        $result = $db->query($sqlQuery)->getResultArray();

        // Pass the result to the view
        $data['result'] = $result;
        return view('master/query_result', $data);
    }

    private function convertToSQL($query) {
        // Use OpenAI to convert natural language to SQL query
        // Make a request to the OpenAI API

        // Example: Construct an API call to OpenAI's language model
        $response = $this->openai->completions(
            'davinci', // Model name or ID
            [
                'prompt' => 'Translate the following English query into SQL: "' . $query . '".',
                'max_tokens' => 100,
                'temperature' => 0.6,
                'top_p' => 1.0,
                'frequency_penalty' => 0.0,
                'presence_penalty' => 0.0
            ]
        );

        // Extract the SQL query from the OpenAI response
        // $choices = $response['choices'];
        // $sqlQuery = $response->choices[0]->text;
        //
        // return $sqlQuery;

        print_r($response);
    }
}
?>
