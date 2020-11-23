<?php
 namespace App\Controllers;
 class movie extends BaseController
 {
 public function index()
 {
     
     // connect to the model
 $places = new \App\Models\character();
 // retrieve all the records
 $records = $places->findAll();
 // get a template parser
 $parser = \Config\Services::parser();
 // tell it about the substitions
 /*return $parser->setData(['records' => $records])
 // and have it render the template with those
 ->render('characterlist');*/
 $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $displayHeadings = array_slice($headings, 1, 2, 3);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        foreach ($records as $record) {
            $nameLink = anchor("movie/showme/$record->id");
            $table->addRow($nameLink,$record->name,"<img src=\"/image/".$record->image."\"/>");
           
        }
        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $table->setTemplate($template); 

        $fields = [
            'title' => 'Main character',
            'heading' => 'Character details',
            'footer' => 'Make by Hongqiang Zhang',
        ];

        $parser = \Config\Services::parser();
        return $parser->setData($fields)
                ->render('templates\top') .
                $table->generate() .
                $parser->setData($fields)
                ->render('templates\bottom');
 
 }
 public function showme($id)
 {
     // connect to the model
 $places = new \App\Models\character();
 // retrieve all the records
 $record = $places->find($id);
 // get a template parser
 $parser = \Config\Services::parser();
 // tell it about the substitions
 /*return $parser->setData($record)
 // and have it render the template with those
 ->render('oneplace');*/
 $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $table->addRow($headings[0], $record['id'])
                ->addRow($headings[1], $record['name'])
                ->addRow($headings[2], "<img src=\"/image/".$record['image']."\"/>")
                ->addRow($headings[3], $record['sex'])
                ->addRow($headings[4], $record['Country'])
                ->addRow($headings[5], $record['Hobby'])
                ->addRow($headings[6], $record['Favorite food'])
                ->addRow($headings[7], $record['Rank'])
                ->addRow($headings[8], $record['Life motto']);
                

        $template = [
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $table->setTemplate($template);

        $fields = [
            'title' => 'Actors name list',
            'heading' => 'Character details',
            'footer' => 'Make by Hongqiang Zhang'
        ];
        // get a template parser
        $parser = \Config\Services::parser();
          return $parser->setData($fields)
                  ->render('templates\top') .           
                  $table->generate() .           
                  $parser->setData($fields)                  
                  ->render('templates\bottom');
 
 

 }

 }
