<html xmlns:v="urn:schemas-microsoft-com:vml">
<head>
    <title>@yield('title')</title>
    <meta http-equiv=Content-Type content="text/html; charset=unicode">
    <!--[if gte mso 9]>
    <xml>
        <o:DocumentProperties>
            <o:Author>ООО Веб-н-ролл</o:Author>
            <o:Company>ООО Веб-н-ролл</o:Company>
        </o:DocumentProperties>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <style>
        body {
            font-size: 12pt;
        }

        h2 {
            font-size: 14pt;
        }

        p {
            text-align: justify;
        }

        p.br {
            margin-top: 0px;
            padding-top: 0px;
        }

        p.right {
            text-align: right;
        }

        p.left {
            text-align: left;
        }

        p.indent {
            text-indent: 30px;
        }

        .MsoTableGrid {
            border-collapse: collapse;
            border: none;
            mso-border-alt: solid windowtext .5pt;
            mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;
        }

        .MsoTableGrid td {
            border: solid windowtext 1.0pt;
            mso-border-alt: solid windowtext .5pt;
            padding: 0cm 5.4pt 0cm 5.4pt;
        }

        <!--
        /* Page Definitions */
        @page Page {
            mso-footer: f1;
            margin-top: 1%;
            mso-paper-source: 0;
        }

        @page Landscape {
            mso-footer: f1;
            margin:0.75in 0.50in 0.75in 0.50in ;
            mso-header-margin:.5in;
            mso-page-orientation: landscape;
            mso-paper-source: 0;
            size: landscape;
        }

        div.Landscape {
            page: Landscape;
        }

        div.Page {
            page: Page;
        }

        p.Footer, li.Footer, div.Footer {
            mso-pagination: widow-orphan;
            tab-stops: center 216.0pt right 432.0pt;
            color: #000000;
        }

        .Page .Footer span {
            color: black;
        }

        pre {
            font-family: "Times New Roman";
        }

        @yield('styles')
        -->
    </style>

    <!--
    <================================= Structure Definitions: =================================>

        <div class=Page>
            Page Content
        </div>

        <br clear=all style='page-break-before:always'>
        <br clear=all style='page-break-before:always;mso-break-type:section-break'>

        <div class=Page>
            Page Content
        </div>

    <========= OR JUST =========>

        <br clear=all style='page-break-before:always'>
        <br clear=all style='page-break-before:always;mso-break-type:section-break'>

    <================================================================================>
    -->
    <!--[if gte mso 9]>
    <xml>
        <o:shapedefaults v:ext="edit" spidmax="1026"/>
    </xml>
    <![endif]-->
    <!--[if gte mso 9]>
    <xml>
        <o:shapelayout v:ext="edit">
            <o:idmap v:ext="edit" data="1"/>
        </o:shapelayout>
    </xml>
    <![endif]-->

</head>
<body bgcolor=white lang=RU>

<!--div class="Page">
    <div align=right
         style="mso-element:footer;margin-left:20.0cm;margin-right:-20.0cm;text-align:right;color:transparent;" id="f1">
        <p class="Footer">
            <span style='mso-tab-count:1'></span>
            <span style='mso-field-code:" PAGE "'></span>
            <span>из</span>
            <span style='mso-field-code:" NUMPAGES "'></span>
            <span style='mso-tab-count:1'></span>
        </p>
    </div>
</div-->

@yield('container')

</body>

</html>
