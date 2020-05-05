<!DOCTYPE html>
<html>

<head>
    <title>Estimate</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css">
        body {
            font-family: "DejaVu Sans";
        }

        html {
            margin: 0px;
            padding: 0px;
        }

        table {
            border-collapse: collapse;
        }

        .header-line {
            color: rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 80px;
            left: 0px;
            right: -70px;
            width: 100%;
        }

        hr {
            color: rgba(0, 0, 0, 0.2);
            border: 0.5px solid #EAF1FB;
        }

        .items-table-hr {
            margin: 0 30px 0 30px;
        }

        .header-left {
            padding-top: 45px;
            padding-bottom: 45px;
            padding-left: 30px;
            display: inline-block;
            width: 30%;
        }

        .header-table {
            position: absolute;
            width: 100%;
            height: 150px;
            left: 0px;
            top: -60px;
        }

        .header-logo {
            position: absolute;
            height: 50px;
            text-transform: capitalize;
            color: #817AE3;
        }

        .header-right {
            display: inline-block;
            position: absolute;
            right: 0;
            padding: 15px 30px 15px 0px;
            float: right;
        }


        .header {
            font-size: 20px;
            color: rgba(0, 0, 0, 0.7);
        }

        .wrapper {
            display: block;
            padding-top: 50px;
            padding-bottom: 20px;
        }

        .address {
            display: inline-block;
            padding-top: 100px
        }

        .bill-add {
            display: inline;
            float: left;
            width: 40%;
            padding: 0 0 0 30px;
        }

        .company {
            padding-left: 30px;
            display: inline;
            float: left;
            width: 30%;
        }

        .company h1 {
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 22px;
            letter-spacing: 0.05em;
        }

        .company-address{
            text-align: left;
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin: 0px;
        }

        /* -------------------------- */
        /* shipping style */
        .ship-to {
            padding-top: 5px;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            margin-bottom: 0px;
        }

        .ship-user-name {
            padding: 0px;
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 22px;
            margin: 0px;
        }

        .ship-user-address {
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin: 0px;
            width: 160px;
        }

        .ship-user-phone {
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin: 0px;
        }

        /* -------------------------- */
        /* billing style */
        .bill-to {
            padding-top: 5px;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            margin-bottom: 0px;
        }

        .bill-user-name {
            padding: 0px;
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 22px;
            margin: 0px;
        }

        .bill-user-address {
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin: 0px;
            width: 160px;
        }

        .bill-user-phone {
            font-style: normal;
            font-weight: normal;
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin: 0px;
        }


        .job-add {
            display: block;
            float: right;
            padding: 20px 30px 0 0;
        }

        .amount-due {
            background-color: #f2f2f2;
        }

        .attribute-label {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
        }

        .attribute-value {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            text-align: right;
        }

        .item-table-heading-row td {
            padding: 10px;
        }

        .item-table-heading-row {
            border-bottom: 1px solid red;
        }

        tr.item-table-heading-row th {
            font-style: normal;
            font-weight: 600;
            font-size: 12px;
            line-height: 18px;
        }

        tr.item-row td {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
        }

        .table2 {
            padding: 0px 30px 10px 30px;
            page-break-before: avoid;
            page-break-after: auto;
        }

        .table2 hr {
            height: 0.1px;
        }

        .item-table-heading {
            font-size: 13.5;
            text-align: center;
            color: rgba(0, 0, 0, 0.85);
            padding: 5px;
        }

        .item-cell {
            font-size: 13;
            color: rgba(0, 0, 0, 0.6);
            text-align: center;
            padding: 5px;
        }

        .note-header {
            font-size: 13;
            color: rgba(0, 0, 0, 0.6);
        }

        .note-text {
            font-size: 10;
            color: rgba(0, 0, 0, 0.6);
        }

        .padd8 {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .padd2 {
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .table3 {
            border: 1px solid #EAF1FB;
            border-top: none;
            box-sizing: border-box;
            width: 630px;
            page-break-inside: avoid;
            page-break-before: auto;
            page-break-after: auto;
        }

        td.estimate-total1 {
            text-align: left;
            padding: 15px 0 15px 10px;
            font-size: 12px;
            line-height: 18px;
            color: #55547A;
            border-bottom: 1px solid #E8E8E8;
            border-top: 1px solid #E8E8E8;
            border-left: 1px solid #E8E8E8;
        }

        td.estimate-total2 {
            font-weight: 500;
            text-align: right;
            font-size: 12px;
            line-height: 18px;
            padding: 15px 10px 15px 0;
            color: #5851DB;
            border-bottom: 1px solid #E8E8E8;
            border-top: 1px solid #E8E8E8;
            border-right: 1px solid #E8E8E8;
        }

        .inv-item {
            border-color: #d9d9d9;
        }

        .no-border {
            border: none;
        }

        .company-details h1 {
            margin: 0;
            font-style: normal;
            font-weight: bold;
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            text-align: left;
            max-width: 220px;
        }

        .company-details h4 {
            margin: 0;
            font-style: normal;
            font-weight: 100;
            font-size: 18px;
            line-height: 25px;
            text-align: right;
        }

        .company-details h3 {
            margin-bottom: 1px;
            margin-top: 0;
        }

        tr.total td {
            border-bottom: 1px solid #E8E8E8;
            border-top: 1px solid #E8E8E8;
        }

        .notes {
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            color: #595959;
            margin-top: 15px;
            margin-left: 30px;
            width: 442px;
            text-align: left;
            page-break-inside: avoid;
        }

        .notes-label {
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            color: #040405;
            width: 108px;
            height: 19.87px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="header-table">
        <table width="100%">
            <tr>
                @if($logo)
                <td class="header-left">
                    <img class="header-logo" src="{{ $logo }}" alt="Company Logo">
                    @else
                    @if($estimate->user->company)
                <td class="header-left" style="padding-top:0px;">
                    <h1 class="header-logo"> {{$estimate->user->company->name}} </h1>
                    @endif
                    @endif
                </td>
                <td class="header-right company-details">
                    @include('app.pdf.estimate.partials.company-address')
                </td>
            </tr>
        </table>
    </div>

    <hr class="header-line">

    <div class="wrapper">
        <div class="address">
            <div class="bill-add">
                <div style="float:left;">
                    @include('app.pdf.estimate.partials.billing-address')
                </div>
                @if($estimate->user->billingaddress)
                <div style="float:right;">
                    @else
                    <div style="float:left;">
                        @endif
                        @include('app.pdf.estimate.partials.shipping-address')
                    </div>
                    <div style="clear: both;"></div>
                </div>

                <div class="job-add">
                    <table>
                        <tr>
                            <td class="attribute-label" style="text-align: left; color: #55547A">Estimate Number</td>
                            <td class="attribute-value"> &nbsp;{{$estimate->estimate_number}}</td>
                        </tr>
                        <tr>
                            <td class="attribute-label" style="text-align: left; color: #55547A">Estimate Date </td>
                            <td class="attribute-value"> &nbsp;{{$estimate->formattedEstimateDate}}</td>
                        </tr>
                        <tr>
                            <td class="attribute-label" style="text-align: left; color: #55547A">Expiry Date</td>
                            <td class="attribute-value"> &nbsp;{{$estimate->formattedExpiryDate}}</td>
                        </tr>
                    </table>
                </div>
                <div style="clear: both;"></div>
            </div>
            @include('app.pdf.estimate.partials.table')
            @include('app.pdf.estimate.partials.notes')
        </div>
</body>

</html>