<!--

HTML Email Receipt

Built in Maizzle, with Tailwind CSS.
https://maizzle.com

Original design by @_hiskie
https://dribbble.com/shots/3081118-Email-Receipt-Daily-UI-017

Maizzle.js source file:
https://github.com/maizzle/remix/blob/master/src/templates/3-dailyui17-email-receipt.njk

-->

<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title>Your reservation is now confirmed</title>

  <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--<![endif]-->

  <!--[if mso]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml>
  <style>
    table {border-collapse: collapse;}
    td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
  </style>
  <![endif]-->
  <style>
    @media screen {
      img {
        max-width: 100%;
      }
      td,
      th {
        box-sizing: border-box;
      }
      u~div .wrapper {
        min-width: 100vw;
      }
      a[x-apple-data-detectors] {
        color: inherit;
        text-decoration: none;
      }
      .all-font-roboto {
        font-family: Roboto, -apple-system, "Segoe UI", sans-serif !important;
      }
      .all-font-sans {
        font-family: -apple-system, "Segoe UI", sans-serif !important;
      }
    }
    @media (max-width: 600px) {
      .sm-inline-block {
        display: inline-block !important;
      }
      .sm-hidden {
        display: none !important;
      }
      .sm-leading-32 {
        line-height: 32px !important;
      }
      .sm-p-20 {
        padding: 20px !important;
      }
      .sm-py-12 {
        padding-top: 12px !important;
        padding-bottom: 12px !important;
      }
      .sm-text-center {
        text-align: center !important;
      }
      .sm-text-xs {
        font-size: 12px !important;
      }
      .sm-text-lg {
        font-size: 18px !important;
      }
      .sm-w-1-4 {
        width: 25% !important;
      }
      .sm-w-3-4 {
        width: 75% !important;
      }
      .sm-w-full {
        width: 100% !important;
      }
    }
  </style>
  <style>
    @media (max-width: 600px) {
      .sm-dui17-b-t {
        border: solid #4299e1;
        border-width: 4px 0 0;
      }
    }
  </style>
</head>
<body style="box-sizing: border-box; margin: 0; padding: 0; width: 100%; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: white;">
 
  <table class="wrapper all-font-sans" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
      <td align="center"  width="100%">
        <table class="sm-w-full" width="600" cellpadding="0" cellspacing="0" role="presentation">
         
          <tr>
           
            <td align="center" class="sm-p-20 sm-dui17-b-t" style="border-radius: 2px; padding: 40px;  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05); vertical-align: top; z-index: 50;" bgcolor="#ffffff" valign="top">
              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td width="80%">
                    <h1 class="sm-text-lg all-font-roboto" style="font-weight: 700; line-height: 100%; margin: 0; margin-bottom: 4px; font-size: 24px;">Customer Receipt</h1>
                     {{-- <div style="display: none; line-height: 0; font-size: 0;">Hey {{$c_name}}, thanks for ith us - your reservation is now confirmed ✔</div> --}}
                    <p class="sm-text-xs" style="margin: 0; color: #000000; font-size: 14px;">Hi {{$c_name}}, thanks for using us - your reservation is now confirmed ✔</p>
                  </td>
                  
                </tr>
              </table>
              <div style="line-height: 32px;">&zwnj;</div>
              <table class="sm-leading-32" style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td class="sm-inline-block" style="color: #000000;" width="50%">Customer</td>
                  <td class="sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{$c_name}}</td>
                </tr>
                <tr>
                  <td class="sm-inline-block" style="color: #000000;" width="50%">Phone</td>
                  <td class="sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{$c_phone}}</td>
                </tr>
                <tr>
                  <td class="sm-w-1-4 sm-inline-block" style="color: #000000;" width="50%">Email</td>
                  <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{$c_email}}</td>
                </tr>
                 <tr>
                  <td class="sm-w-1-4 sm-inline-block" style="color: #000000;" width="50%">Booking Code</td>
                  <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{$b_code}}</td>
                </tr>
              </table>
              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td style="padding-top: 24px; padding-bottom: 24px;">
                    <div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
                  </td>
                </tr>
              </table>
              <table style="font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td class="sm-w-full sm-inline-block sm-text-center" width="40%">
                    <p class="all-font-roboto" style="margin: 0; margin-bottom: 4px; color: #000000; font-size: 15px; text-transform: uppercase; letter-spacing: 1px;">Pick-Up</p>
                    <p class="all-font-roboto" style="font-weight: 600; margin: 0; color: #000000;">{{$b_pickup}}</p>
                    <p class="all-font-roboto" style="font-weight: 600; margin: 0; color: #000000;">{{$b_date}} - {{$b_time}} </p>

                  </td>
                  
                </tr>
              </table>
              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td style="padding-top: 24px; padding-bottom: 24px;">
                    <div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
                  </td>
                </tr>
              </table>
              <table style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td style="color: #000000;" width="50%">Amount</td>
                  <td style="font-weight: 600; text-align: right;" width="50%" align="right">${{$totalFare}}</td>
                </tr>
               
                <tr>
                  <td style="font-weight: 600; padding-top: 32px; color: #000000; font-size: 20px;" width="50%">Total</td>
                  <td style="font-weight: 600; padding-top: 32px; text-align: right; color: #68d391; font-size: 20px;" width="50%" align="right">${{$totalFare}}</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>