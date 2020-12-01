<!-- Two Columns -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td class="pb-10" style="padding-bottom: 10px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <th class="column-top brr-15" width="320" bgcolor="#ffffff"
                                style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top; border-radius:15px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td class="p-10" style="padding: 10px 10px 10px 10px;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <table width="100%" border="0" cellspacing="0"
                                                                    cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="p-20"
                                                                                style="padding: 20px 20px 20px 20px;">
                                                                                <table width="100%" border="0"
                                                                                    cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="text-24 pb-15"
                                                                                                style="color:#333333; font-family:'Playfair Display', Arial, sans-serif; font-size:24px; line-height:34px; text-align:left; font-weight:normal; min-width:auto !important; padding-bottom: 15px;">
                                                                                                <b>{{$email['subject']}}<b>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="text-16 pb-25"
                                                                                                style="color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:30px; text-align:left; min-width:auto !important; padding-bottom: 25px;">
                                                                                                {{$email['topic']}}
                                                                                                <br>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td align="left">
                                                                                                <!-- Button -->
                                                                                                <table border="0"
                                                                                                    cellspacing="0"
                                                                                                    cellpadding="0">
                                                                                                    <tbody>

                                                                                                        <tr>
                                                                                                            <td class="text-16 pb-20"
                                                                                                                style="color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:30px; text-align:left; min-width:auto !important; padding-bottom: 20px;">

                                                                                                                @if (isset($email['contactEmail']))
                                                                                                                <h4>
                                                                                                                    Email:-{{$email['contactEmail']}}
                                                                                                                </h4>
                                                                                                                @endif
                                                                                                                @if (isset($email['name']))
                                                                                                                <h4>
                                                                                                                    Name:-{{$email['name']}}
                                                                                                                </h4>
                                                                                                                @endif
                                                                                                                @if (isset($email['message']))
                                                                                                                <h4>
                                                                                                                    Message:-{{$email['message']}}
                                                                                                                </h4>
                                                                                                                @endif
                                                                                                                @if (isset($email['content']))
                                                                                                                <h4>
                                                                                                                  {{$email['content']}}
                                                                                                                </h4>
                                                                                                                @endif
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>

                                                                                                <!-- END Button -->
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
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<!-- END Two Columns -->
