<?php

if (isset($_GET['credits'])) {
	if ($_GET['credits'] == "yes") {
		echo '{"key":"-----BEGINPUBLIC KEY-----\r\nMIGbMBAGByqGSM49AgEGBSuBBAAjA4GGAAQB0g2fVl3DPH+SvIYvLrYDfOpcZ89a\r\nuD3a7OHjCIKBVwBI7NznhnD6JaWArrcIWCN4v+5FBKK1N+VpmEntBzTLmbgAsNVS\r\nOrSaa6dVdan7Kwj59mTUafKimJp2IKZMZ0cVrWzqj8Mu9xnVBKGZpPOZ1RrSxTSf\r\nVqKX9S19XbWe3wNkxpk=\r\n-----END PUBLIC KEY-----","signature":"MIGGAkFgp6XyWaxIiM4VB1oPkCLVB+VRy9s4qClv28ybksffMITbZ1NKZwpdtCHTqrmu0wBaMq\/TjEw3W3zs+ont6suWrAJBVDkCIEU1getg1OZAviZXi3uG7BXLFTXSU6qoDOA9N2+RMRJoEqQcbgqUAUMJkKfVB0TwcMdBymtcq3P0CudDJAE=","credits":"MHlibztCb3JuamVzdGVyO0RyYWdvbjtHYW1pbmc7SW5mYW1vdXMxO0l0c0FsaztNaWtlIEhhd2s7UC4gRmxhcmU7cHBzc2pqMDQwMTtSeW81Njc4O1RhbTtUcmVlaGVybztSZXBlYXQ2NDtzYW55YWUyNDM5O3dpZ2d5"}';
		die();
	}
}

echo '{"key":"-----BEGINPUBLIC KEY-----\r\nMIGbMBAGByqGSM49AgEGBSuBBAAjA4GGAAQB0g2fVl3DPH+SvIYvLrYDfOpcZ89a\r\nuD3a7OHjCIKBVwBI7NznhnD6JaWArrcIWCN4v+5FBKK1N+VpmEntBzTLmbgAsNVS\r\nOrSaa6dVdan7Kwj59mTUafKimJp2IKZMZ0cVrWzqj8Mu9xnVBKGZpPOZ1RrSxTSf\r\nVqKX9S19XbWe3wNkxpk=\r\n-----END PUBLIC KEY-----","signature":"MIGGAkFgp6XyWaxIiM4VB1oPkCLVB+VRy9s4qClv28ybksffMITbZ1NKZwpdtCHTqrmu0wBaMq\/TjEw3W3zs+ont6suWrAJBVDkCIEU1getg1OZAviZXi3uG7BXLFTXSU6qoDOA9N2+RMRJoEqQcbgqUAUMJkKfVB0TwcMdBymtcq3P0CudDJAE="}';

?>