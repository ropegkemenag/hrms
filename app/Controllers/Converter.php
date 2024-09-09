<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use NcJoes\OfficeConverter\OfficeConverter;

class Converter extends BaseController
{
    public function index()
    {
      // $process = new Process(['ls', '-lsa']);
      $fname = '/draft/test.docx';
      $outdir = '/draft/pdf/';

      $process = new Process(['libreoffice', '--headless','--convert-to', 'pdf:writer_pdf_Export','--outdir', $outdir, $fname],null,['HOME'=>'/tmp']);
      $process->run();

      if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
      }

      echo $process->getOutput();
    }

    public function docxtopdf()
    {
      $converter = new OfficeConverter('draft/test.docx', 'draft/pdf');
    }
}
