<?php

namespace App\Api\V1\Controllers;

use Atymic\Twitter\Facade\Twitter;

class TwitterIntegrationController extends Controller {

    /**
     * @OA\Get(
     *     path="/subscribe/user/bot",
     *     summary="Subscribe user to bot",
     *     tags={"Subscription"},
     *     @OA\Response(
     *         response=200,
     *         description="User subscribed to the bot successfully"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     )
     * )
     */
    public function subscribe_bot(){

        //i can not get the response from the twitter api because i did not the upgrade developer account
        return Twitter::postDm(['event'=>['test']]);
    }

    /**
     * @OA\Post(
     *     path="/subscribe/user/channel",
     *     summary="Subscribe user to channel",
     *     tags={"Subscription"},
     *     @OA\Response(
     *         response=200,
     *         description="User subscribed to the channel successfully"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     )
     * )
     */

    public function subscribe_channel(){
       //
    }

    /**
     * @OA\Post(
     *     path="/subscribe/user/message",
     *     summary="Subscribe user to messages",
     *     tags={"Subscription"},
     *     @OA\Response(
     *         response=200,
     *         description="User subscribed to messages successfully"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     )
     * )
     */

    public function subscribe_message(){
        //
    }

    /**
     * @OA\Post(
     *     path="/webhook",
     *     summary="Handle incoming webhooks",
     *     tags={"Webhook"},
     *     @OA\Response(
     *         response=200,
     *         description="Webhook successfully processed"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     )
     * )
     */

    public function webhook(){
        //
    }
}
