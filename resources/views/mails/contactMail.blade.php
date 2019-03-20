<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title>You have a new support message</title>
    <style type="text/css">
        @media (min-width: 550px) {
            .hero-image {
                top: 0 !important;
            }

            table[class="body"] {
                padding-bottom: 50px !important;
                padding-top: 50px !important;
            }

            .email-logo-masthead {
                display: inline !important;
                height: 100px !important;
                margin-left: -30px !important;
                margin-right: 0 !important;
                margin-bottom: -20px !important;
            }

            .email-content {
                border-left: 1px solid #dadfe1 !important;
                border-right: 1px solid #dadfe1 !important;
            }

            .email-content-block {
                padding-left: 50px !important;
                padding-right: 50px !important;
            }
        }

        .email-social-bar-copy p, .email-social-bar-copy a, .email-social-bar-copy .ios-no-link {
            color: white !important;
            text-decoration: none !important;
        }

        .dento-blockquote .icon {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 70px;
            flex: 0 0 70px;
            max-width: 70px;
            width: 70px;
        }
        .change-size-big{
            font-size: 22px;
        }
        .quote{
            background-color: #f3f6f9;
            margin: 0px;
            padding: 1px 20px;
            border-radius: 13px;
        }
    </style>
</head>

<body style="background-color: #f6f8f8; height: 100%; margin: 0; padding: 0;">
<div
    style="display:none;font-size:1px;color:#f6f8f8;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
    verify your Sanggar ABK's email.
</div>
<table class="body" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
       style="background-color: #f6f8f8; height: 100%; padding-bottom: 25px; padding-left: 0; padding-right: 0; padding-top: 25px;">
    <tbody>
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td width="550">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                            <tr>
                                <td>
                                    <table class="" align="center" border="0" cellpadding="0" cellspacing="0"
                                           width="100%" style="height: 80px">
                                        <tbody>
                                        <td>
                                            <center>
                                                <img class="email-logo-masthead"
                                                     src="{{'https://i.ibb.co/CMY18yw/usaha-jaya-a.png'}}"
                                                     height="30"
                                                     style="top:11px;position:relative;width: auto; max-width: 100% !important; display: block;  height: 100px !important;
                margin-left: -30px !important;
                margin-right: 0 !important;
                margin-bottom: -20px !important;">
                                            </center>
                                        </td>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="email-content-border" style="border-top: 1px solid #dadfe1;"></td>
                            </tr>
                            <tr>
                                <td class="email-content" style="background-color: #FFFFFF;">
                                    <table class="" align="center" border="0" cellpadding="0" cellspacing="0"
                                           width="100%">
                                        <tbody>
                                        <tr>
                                            <td class="email-content-block copy"
                                                style='font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; padding-left: 25px; padding-right: 25px; padding-top: 50px;'>
                                                <h2 style='margin: 0 0 0.5rem 0; line-height: 1.25; font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; color: #3e474c; font-size: 2rem; font-weight: 500; font-style: normal;'>
                                                    Hello {{$msg['message_name']}},</h2>

                                                <p style='margin-bottom: 15px; font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; font-weight: 400; font-size: 16px; line-height: 1.5;'>
                                                    Kami telah menerima pesan anda. </p>
                                                <blockquote class="dento-blockquote d-flex quote">
                                                    <div class="text">

                                                        <h5>{{$msg['message']}}</h5>
                                                    </div>
                                                </blockquote>
                                                <p style='font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; font-weight: 400; font-size: 16px;  ;'>
                                                    kami akan segera proses pesan anda.</p>

                                                <p style='margin-bottom: 15px; font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; font-weight: 400; font-size: 16px; line-height: 1.5;'>
                                                    Terima Kasih!</p>
                                                <p class="signout light-type"
                                                   style='margin-bottom: 15px; font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; font-weight: 400; font-size: 16px; line-height: 1.5; color: #788991;'>
                                                    — {{env('APP_NAME')}}</p>
                                                <div class="padding-break"
                                                     style='font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; margin-top: 50px;'></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="email-social-bar" align="center" border="0" cellpadding="0"
                                           cellspacing="0" width="100%"
                                           style="padding-left: 50px; padding-right: 50px; background: #002762; padding-bottom: 25px; padding-top: 25px;">
                                        <tbody>
                                        <tr>
                                            <td class="email-social-bar-copy copy"
                                                style='font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important;'>
                                                <p class="ios-no-link"
                                                   style=' width:19em; margin-bottom: 15px; font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; font-weight: 400; font-size: 11px; line-height: 1.5; color: white;'>
                                                    {{isset($contact->address)?$contact->address:'Alamat belum diatur.'}}
                                                    <br style='font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important;'>
                                                    Telp. : <a href="tel://{{$contact->phone}}" class="phone">{{$contact->phone}}</a></p>

                                            </td>
                                            <td class="email-social-bar-icons">
                                                <table class="" align="center" border="0" cellpadding="0"
                                                       cellspacing="0" width="100%">
                                                    <tbody>
                                                    <tr>
                                                        <td align="right">
                                                            <a class="email-social-bar-social-icon"
                                                               href="{{$contact->twitter}}"
                                                               style="-moz-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); -o-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); -webkit-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); color: #4EAACC; padding: 0 5px; text-decoration: none;">
                                                                <img class="auto-width"
                                                                     src="https://simple.com/email-images/icons/social-twitter.png"
                                                                     style="width: auto; max-width: 100% !important; border: 0;">
                                                            </a>
                                                            <a class="email-social-bar-social-icon"
                                                               href="{{$contact->facebook}}"
                                                               style="-moz-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); -o-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); -webkit-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); color: #4EAACC; padding: 0 5px; text-decoration: none;">
                                                                <img class="auto-width"
                                                                     src="https://simple.com/email-images/icons/social-facebook.png"
                                                                     style="width: auto; max-width: 100% !important; border: 0;">
                                                            </a>
                                                            <a class="email-social-bar-social-icon"
                                                               href="{{$contact->instagram}}"
                                                               style="-moz-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); -o-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); -webkit-transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); transition: color 0.175s cubic-bezier(0.215, 0.61, 0.355, 1); color: #4EAACC; padding: 0 5px; text-decoration: none;">
                                                                <img class="auto-width"
                                                                     src="https://simple.com/email-images/icons/social-instagram.png"
                                                                     style="width: auto; max-width: 100% !important; border: 0;">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                            <tr>
                                <td align="center" class="email-disclaimer copy"
                                    style='font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; padding-left: 50px; padding-right: 50px; padding-top: 15px; padding-bottom: 15px;'>
                                    <p style='margin-bottom: 15px; font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; font-weight: 400; font-size: 11px; line-height: 1.5; color: #788991; margin-top: 0;'>
                                        email ini dikirim dari <strong
                                            style='font-weight: 500; font-family: "Avenir Next", "Avenir", "Helvetica", sans-serif !important; font-size: 11px; color: #788991; margin-top: 0;'>{{env('MAIL_USERNAME')}}</strong>.
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>

</html>
