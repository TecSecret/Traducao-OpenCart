<?php
// Heading
$_['heading_title']       			= 'PagSeguro';

// Text
$_['text_edit']                 	= 'Editar o PagSeguro';
$_['text_payment']        			= 'Pagamento';
$_['text_success']        			= 'Sucesso: Você modificou os detalhes da conta do PagSeguro!';
$_['text_pagseguro']				= '<a target="_BLANK" href="http://www.pagseguro.com.br"><img src="view/image/payment/pagseguro_uol.gif" alt="PagSeguro" title="PagSeguro" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_frete_loja']        		= 'pela loja';
$_['text_frete_pagseguro_pac']      = 'pelo PagSeguro usando PAC';
$_['text_frete_pagseguro_sedex']    = 'pelo PagSeguro usando Sedex';
$_['text_frete_pagseguro_nao_especificado'] = 'pelo PagSeguro. O cliente escolhe entre PAC e Sedex';

// Entry
$_['entry_token']         				= 'Token';
$_['entry_email']         				= 'Email';
$_['entry_posfixo']         			= 'Pós-fixo do número do pedido';
$_['entry_tipo_frete']         			= 'Cálculo do frete feito';
$_['entry_order_aguardando_pagamento'] 	= 'Aguardando pagamento';
$_['entry_order_analise'] 				= 'Em análise';
$_['entry_order_paga'] 					= 'Paga';
$_['entry_order_disputa'] 				= 'Disputa';
$_['entry_order_devolvida'] 			= 'Devolvida';
$_['entry_order_cancelada'] 			= 'Cancelada';
$_['entry_total']       			 	= 'Total Mínimo'; 
$_['entry_geo_zone']      				= 'Região geográfica';
$_['entry_status']        				= 'Situação';
$_['entry_sort_order']    				= 'Ordem';
$_['entry_update_status_alert'] 		= 'Alertar sobre mudança no status';

// Help
$_['help_token']				= 'Token de Segurança fornecido pelo PagSeguro';
$_['help_email']				= 'Email da conta no PagSeguro';
$_['help_posfixo']				= 'Útil para identificar no PagSeguro de qual loja pertence o pedido. Ex. para pedido de nro. 15 e pós-fixo lojaX, a referência do pedido no PagSeguro será 15_lojaX';
$_['help_tipo_frete']			= 'Se optar pelo cálculo feito pela loja, escolha Frete Fixo em Preferências de frete no PagSeguro senão marque Frete Por Peso para que o PagSeguro faça os cálculos.';
$_['help_order_aguardando_pagamento']	= 'O comprador iniciou a transação, mas até o momento o PagSeguro não recebeu nenhuma informação sobre o pagamento.';
$_['help_order_analise']		= 'O comprador optou por pagar com um cartão de crédito e o PagSeguro está analisando o risco da transação.';
$_['help_order_paga']			= 'A transação foi paga pelo comprador e o PagSeguro já recebeu uma confirmação da instituição financeira responsável pelo processamento.';
$_['help_order_disputa']		= 'O comprador, dentro do prazo de liberação da transação, abriu uma disputa.';
$_['help_order_devolvida']		= 'O valor da transação foi devolvido para o comprador.';
$_['help_order_cancelada']		= 'A transação foi cancelada sem ter sido finalizada.';
$_['help_update_status_alert']	= 'Envia email para o cliente avisando-o sobre mudança no status do pedido.';
$_['help_total']				= 'Total mínimo que o pedido deve alcançar para que este método de pagamento seja habilitado.';

// Error
$_['error_permission']    		= 'Atenção: Você não possui permissão para modificar o PagSeguro!';
$_['error_token']         		= 'Digite o token de segurança';
$_['error_email']         		= 'Digite o e-mail de cadastro no PagSeguro';
?>