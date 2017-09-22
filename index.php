<?php
// test commit for branch slim2
require 'vendor/autoload.php';



$app = new \Slim\Slim(array(
    'mode' => 'development',
    'debug' => true,
    'log.enabled' => true,
    ));






/**
 *  * okan cıran
 * @since 11-09-2014
 */
$app->get("/redirected_path/", function () use ($app) {
    echo "redirected path";
});

/**
 *  * okan cıran
 * @since 11-09-2014
 */
$app->get("/hashNotMatch/", function () use ($app) {
    echo "hashNotMatch";
});

$app->get("/timeExpired/", function () use ($app) {
    echo "timeExpired";
});

/**
 *  * okan cıran
 * @since 27-01-2016
 */
$app->get("/timeStampNotFound/", function () use ($app) {
    echo "timeStampNotFound";
});

/**
 *  * okan cıran
 * @since 05/01/2016
 */
$app->get("/publicNotFound/", function () use ($app) {
    echo "publicNotFound";
});

/**
 *  * okan cıran
 * @since 27/01/2016
 */
$app->get("/publicTempNotFound/", function () use ($app) {
    echo "publicTempNotFound";
});

/**
 *  * okan cıran
 * @since 09/06/2016
 */
$app->get("/publicCompanyNotFound/", function () use ($app) {
    echo "publicCompanyNotFound";
});

/**
 *  * okan cıran
 * @since 05/01/2016
 */
$app->get("/privateNotFound/", function () use ($app) {
    echo "privateNotFound";
});

/**
 *  * okan cıran
 * @since 27/01/2016
 */
$app->get("/privateTempNotFound/", function () use ($app) {
    echo "privateTempNotFound";
});

/**
 *  * okan cıran
 * if user id and company public key does not match, rest api forward request here
 * @since 09/06/2016
 */
$app->get("/userNotBelongToCompany/", function () use ($app) {
    echo "userNotBelongToCompany";
});

/**
 *  * okan cıran
 * @since 05/01/2016
 */
$app->get("/userNotRegistered/", function () use ($app) {
    echo "userNotRegistered";
});

/**
 *  * okan cıran
 * @since 06/01/2016
 */
$app->get("/userNotRegisteredSlim/", function () use ($app) {
    echo "header-userNotRegistered";
});

/**
 *  * okan cıran
 * @since 06/01/2016
 */
$app->get("/publicNotFoundSlim/", function () use ($app) {
    echo "header-publicNotFound";
	print_r($_GET);
});

/**
 *  * okan cıran
 * @since 05/01/2016
 */
$app->get("/privateNotFoundSlim/", function () use ($app) {
    echo "header-privateNotFound";
});



$app->run();