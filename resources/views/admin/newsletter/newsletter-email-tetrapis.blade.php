<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <title> Newsletter Template </title>
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/Favicon.png')}}">
    <style type="text/css">
        #outlook a {
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" type="text/css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap);
    </style>
    <!--<![endif]-->
    <style type="text/css">
        @media only screen and (min-width:480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
        }
    </style>
    <style type="text/css">
        @media only screen and (max-width:480px) {
            table.mj-full-width-mobile {
                width: 100% !important;
            }

            td.mj-full-width-mobile {
                width: auto !important;
            }
        }
    </style>
    <style type="text/css">
        a,
        span,
        td,
        th {
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
</head>

<body style="background-color:#f3f3f5;">
    <div style="display:none;font-size:1px;color:#ffffff;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;"> Preview - Welcome to PopTelecom </div>
    @if($newsletter)
    <div style="background-color:#f3f3f5;">

        <div style="margin:0px auto;max-width:600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                <tbody>
                    <tr>
                        <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">

                            <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                    <tr>
                                        <td style="font-size:0px;word-break:break-word;">

                                            <div style="height:20px;"> &nbsp; </div>

                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="background:#00AD55 url(https://www.transparenttextures.com/patterns/brushed-alum.png) top center / auto repeat;margin:0px auto;border-radius:4px 4px 0 0;max-width:600px;">
            <div style="line-height:0;font-size:0;">
                <table align="center" background="https://www.transparenttextures.com/patterns/brushed-alum.png" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#00AD55 url(https://www.transparenttextures.com/patterns/brushed-alum.png) top center / auto repeat;width:100%;border-radius:4px 4px 0 0;">
                    <tbody>
                        <tr>
                            <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">

                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                        <tr>
                                            <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:150px;">
                                                                <img height="auto" src="{{asset('assets/images/Logo.png')}}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:50%;font-size:13px;" width="150">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size:0px;word-break:break-word;">

                                                <div style="height:20px;"> &nbsp; </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                <div style="font-family:Poppins, Helvetica, Arial, sans-serif;font-size:24px;font-weight:500;line-height:30px;text-align:center;color:#ffffff;">
                                                    <p style="margin: 0;">{{$heading}}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;border-radius:0 0 4px 4px;max-width:600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;border-radius:0 0 4px 4px;">
                <tbody>
                    <tr>
                        <td style="direction:ltr;font-size:0px;padding:40px 10px 20px 10px;text-align:center;">

                            <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <div style="font-family:Poppins, Helvetica, Arial, sans-serif;font-size:20px;font-weight:300;line-height:30px;text-align:left;color:#003366;">
                                                <p style="margin: 0;"> {{$description}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </table>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
                <tbody>
                    <tr>
                        <td style="direction:ltr;font-size:0px;padding:0px;text-align:center;">

                            <div style="margin:0px auto;max-width:600px;">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-top:0;text-align:center;">

                                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                                        <tr>
                                                            <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;" class="mj-full-width-mobile">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="width:550px;" class="mj-full-width-mobile">
                                                                                <img alt="image description" height="auto" src="{{asset('assets/images/template/'.$image)}}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="550">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                                        <tr>
                                                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <div style="font-family:Poppins, Helvetica, Arial, sans-serif;font-size:24px;font-weight:500;line-height:30px;text-align:left;color:#003366;">
                                                                    <h1 style="margin: 0; font-size: 32px; line-height: 40px; font-weight: 400;"> {{$title}}</h1>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                                        <tr>
                                                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <div style="font-family:Poppins, Helvetica, Arial, sans-serif;font-size:20px;font-weight:300;line-height:30px;text-align:left;color:#003366;">
                                                                    <p style="margin: 0;">{{$desc1}} </p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" vertical-align="middle" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                                                                    <tr>
                                                                        <td align="center" bgcolor="#043768" role="presentation" style="border:none;border-radius:3px;cursor:auto;background:#043768;" valign="middle">
                                                                            <a href="{{$btnlink}}" style="word-break: normal; display: inline-block; background: #043768; color: white; font-family: Poppins, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: normal; line-height: 30px; margin: 0; text-decoration: none; text-transform: none; padding: 10px 25px;border-radius: 3px;" target="_blank"> Read more </a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>



        <div style="background:#043768;background-color:#043768;margin:0px auto;max-width:600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#043768;background-color:#043768;width:100%;">
                <tbody>
                    <tr>
                        <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">

                          
                            <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                    
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <div style="font-family:Poppins, Helvetica, Arial, sans-serif;font-size:16px;font-weight:500;line-height:30px;text-align:left;color:#ffffff;">{{$desc2}}<a class="footer-link" href="https://google.com" style="word-break: normal; color: #fff; text-decoration: underline;"> unsubscribe here </a>.</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                   
                                    <tr>
                                        <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                            <div style="font-family:Poppins, Helvetica, Arial, sans-serif;font-size:16px;font-weight:500;line-height:30px;text-align:left;color:#ffffff;">
                                                <p style="margin: 0;"> {{$footer}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin:0px auto;max-width:600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                <tbody>
                    <tr>
                        <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">

                            <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                    <tr>
                                        <td style="font-size:0px;word-break:break-word;">

                                            <div style="height:1px;"> &nbsp; </div>

                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    @endif
</body>

</html>