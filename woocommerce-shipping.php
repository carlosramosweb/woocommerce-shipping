<?php
/**
 *
 * @link              https://criacaocriativa.com
 * @since             1.0.0
 * @package           adicionar_opcoes_envio 
 *
 * @wordpress-plugin
 * Plugin Name:       Adicionar Opções Envio for WooCommerce
 * Plugin URI:        https://plugins.criacaocriativa.com
 * Description:       Adicionar Opções de Envio ao WooCommerce permite personalizar e oferecer diferentes métodos de envio aos clientes durante o processo de checkout.
 * Version:           1.0.0
 * Author:            carlosramosweb
 * Author URI:        https://criacaocriativa.com
 * Donate link:       https://donate.criacaocriativa.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       adicionar-opcoes-envio
 * Domain Path:       /languages
 */

// Adicionar opções de envio ao WooCommerce
function adicionar_opcoes_envio($metodos_envio) {
    $metodos_envio['meu_metodo_envio'] = 'Meu Método de Envio'; // substitua "meu_metodo_envio" pelo slug do seu método de envio
    return $metodos_envio;
}
add_filter('woocommerce_shipping_methods', 'adicionar_opcoes_envio');

// Calcular custo de envio personalizado
function calcular_custo_envio_personalizado($custo, $package) {
    // faça seus cálculos personalizados aqui e retorne o custo de envio
    return $custo;
}
add_filter('woocommerce_package_rates', 'calcular_custo_envio_personalizado', 10, 2);
