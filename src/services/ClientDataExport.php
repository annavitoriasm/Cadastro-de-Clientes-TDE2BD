<?php
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;

    class ClientExportService
    {
        public function exportToSheet($clients)
        {
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1', 'ID');
            $sheet->setCellValue('B1', 'Nome');
            $sheet->setCellValue('C1', 'Email');
            $sheet->setCellValue('D1', 'Contato');
            $sheet->setCellValue('E1', 'Endereço');
            $sheet->setCellValue('F1', 'CEP');
            $sheet->setCellValue('G1', 'Pessoa');
            $sheet->setCellValue('H1', 'CPF/CNPJ');

            $sheet->getColumnDimension('A')->setWidth(10);
            $sheet->getColumnDimension('B')->setWidth(35);
            $sheet->getColumnDimension('C')->setWidth(35);
            $sheet->getColumnDimension('D')->setWidth(15);
            $sheet->getColumnDimension('E')->setWidth(40);
            $sheet->getColumnDimension('F')->setWidth(10);
            $sheet->getColumnDimension('G')->setWidth(8);
            $sheet->getColumnDimension('H')->setWidth(15);

            $sheet->getStyle('A2:F' . (count($clients) + 1))
              ->getNumberFormat()
              ->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_TEXT);
            $sheet->getStyle('F2:F' . (count($clients) + 1))
              ->getNumberFormat()
              ->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_TEXT);
            $sheet->getStyle('H2:H' . (count($clients) + 1))
              ->getNumberFormat()
              ->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_TEXT);

            $row = 2;
            foreach ($clients as $client) {
                $sheet->setCellValue('A' . $row, $client['id']);
                $sheet->setCellValue('B' . $row, $client['nome']);
                $sheet->setCellValue('C' . $row, $client['email']);
                $sheet->setCellValue('D' . $row, $client['contato']);
                $sheet->setCellValue('E' . $row, $client['endereco']);
                $sheet->setCellValue('F' . $row, $client['cep']);
                $sheet->setCellValue('G'. $row, $client['pessoa_fisica']);
                $sheet->setCellValue('H' . $row, $client['cpf_cnpj']);

                $row++;
            }

            $writer = new Xlsx($spreadsheet);
            $filename = 'clientes_' . date('Ymd') . '.xlsx';

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header("Content-Disposition: attachment;filename=\"$filename\"");
            header('Cache-Control: max-age=0');

            $writer->save('php://output');
        }
    }
