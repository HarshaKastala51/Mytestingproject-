<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.applozic.com
 * @since      1.0.0
 *
 * @package    Applozic_Chat_Plugin
 * @subpackage Applozic_Chat_Plugin/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<!-- Support Chat -->
<div id="chatLoginModal" class="sidemodal modal fade" aria-hidden="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&#88;</span>
                </button>
                <h2 class="modal-title">Support Chat</h2>
            </div>
            <div class="modal-body">
                <div class="section-title">
                    <h3>Login detail</h3>
                </div>
                <p id="error-chat-login" class="modal-error hide"></p>
                <div class="modal-form">
                    <form id="form-chat-login" class="vertical">
                        <div class="form-group">
                            <input class="form-control" id="userName" name="userName" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="companyName" name="companyName" placeholder="Company" required />
                        </div>
                        <div class="form-group last last-child text-center">
                            <button type="submit" id="submit-chat-login" class="btn btn-primary">
                                Start chat
                            </button>
                        </div>
                    </form>
                </div>
                <div class="section-title section-separator">
                    <h3>Or</h3>
                </div>
                <div class="form-group last last-child text-center">
                    <button type="button" id="guestLogin" class="btn btn-default">
                        Chat as guest
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="chat-login-launcher">
    <a href="#" class="chat-login-launcher-link" name="chatLoginModalLink" onclick="_gaq.push(['_trackEvent', 'Click', 'Support_Chat', 'From_Docs_{{page.github}}']);">
        <span class="float-icon-chat"></span>
    </a>
</div>
