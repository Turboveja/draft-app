<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class XMLExportationController extends Controller
{
    /**
     * Example of XML data export
     *
     * @return void
     */
    public function testXML()
    {
        try {
            $artist = Artist::first();

            //Dom configuration
            $domDoc = new DOMDocument();
            $domDoc->encoding = 'utf-8';
            $domDoc->xmlVersion = '1.0';
            $domDoc->formatOutput = true;
            $xml_file_name = 'test.xml';

            //Main element
            $root = $domDoc->createElement('ThisIsMainElement');
            $domDoc->appendChild($root);

            foreach ($artist->getAttributes() as $key => $value) {
                //Node
                $node = $domDoc->createElement('KeyValueElement');
                $attributeToNode = new DOMAttr($key, $value);
                $node->setAttributeNode($attributeToNode);

                //Child tree example
                $childNodeExample = $domDoc->createElement('TreechildExample');
                $node->appendChild($childNodeExample);

                //Node append to document
                $root->appendChild($node);
            }

            //Save document
            Storage::disk('xmldemos')->put($xml_file_name, $domDoc->saveXML());
        } catch (\Exception $ex) {
            dd($ex);
        }
    }
}
