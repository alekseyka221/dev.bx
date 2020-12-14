<?php
require_once 'FactoryTask.php';

echo '-basic construction'.PHP_EOL;
$documentText = 'Document text here';
$report = new TextDocument($documentText);
$report->print();
$report = new PdfDocument();
$report->setText($documentText);
$report->print();
echo '-basic factory construction'.PHP_EOL;
$TextFactory = new TextDocumentFactory($documentText);
$report = $TextFactory->createExtension();
$report->print();
$TextFactory = new PdfDocumentFactory($documentText);
$report = $TextFactory->createExtension()->print();
echo '-DocumentPrinter construction'.PHP_EOL;
DocumentPrinter::printDocumentByType(DocumentPrinter::DOCUMENT_TYPE_TEXT,$documentText);
DocumentPrinter::printDocumentByType(DocumentPrinter::DOCUMENT_TYPE_PDF,$documentText);


/*
 	Воспользуйтесь шаблоном проектирования "Фабричный метод"

	$documentText = 'Document text here';

	DocumentPrinter::print('text', $documentText);
	//TextDocument

	DocumentPrinter::print('pdf', $documentText);
	//PdfDocument
 */