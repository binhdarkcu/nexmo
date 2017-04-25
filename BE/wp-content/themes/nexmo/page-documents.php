<?php get_header("documents");?>
<main id="content-wrapper" class="documents-page">

    <div class="container">
        <div class="row ">

            <?php get_sidebar("documents")?>

            <!-- main content -->
            <div class="col-xs-12 col-md-9">
                <section class="main-content">
                    <table class="navtable navtable-home">
                        <tbody>
                            <tr>
                                <td align="center" valign="top">
                                    <figure>
                                        <a href="https://docs.nexmo.com/messaging"><img src="https://docs.nexmo.com/assets/images/messaging_home.svg#messaging-home" alt="messaging_home"></a>
                                    </figure>
                                    <h3 class="home-table-header" align="center"><a href="https://docs.nexmo.com/messaging">Messaging</a></h3>
                                    <p align="center">The most reliable way to reach users around the globe using SMS</p>
                                </td>
                                <td align="center" width="50%">
                                    <figure>
                                        <a href="https://docs.nexmo.com/voice"><img src="https://docs.nexmo.com/assets/images/voice_home.svg#voice-home" alt="voice_home"></a>
                                    </figure>
                                    <h3 class="home-table-header" align="center"><a href="https://docs.nexmo.com/voice">Voice</a></h3>
                                    <p align="center">Build high quality voice applications in the cloud</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" width="50%">
                                    <figure>
                                        <a href="https://docs.nexmo.com/verify"><img src="https://docs.nexmo.com/assets/images/verify_home.svg#verify-home" alt="verify_home"></a>
                                    </figure>
                                    <h3 class="home-table-header" align="center"><a href="https://docs.nexmo.com/verify">Verify</a></h3>
                                    <p align="center">Confirm that a phone number is valid, reachable, and accessible by a user</p>
                                </td>
                                <td align="center" width="50%">
                                    <figure>
                                        <a href="https://docs.nexmo.com/number-insight"><img src="https://docs.nexmo.com/assets/images/number_insight_home.svg#number-insight-home" alt="number_insight_home"></a>
                                    </figure>
                                    <h3 class="home-table-header" align="center"><a href="https://docs.nexmo.com/number-insight">Number Insight</a></h3>
                                    <p align="center">Retrieve real-time intelligence on numbers anywhere in the world and protect yourself from fraud and spam</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" width="50%">
                                    <h3 align="center"><a href="https://docs.nexmo.com/tools">Tools</a></h3>
                                    <p align="center">Interact with the features in your Nexmo account through the user interface or our APIs</p>
                                </td>
                                <td align="center" width="50%">
                                    <h3 align="center"><a href="https://docs.nexmo.com/tutorials">Tutorials</a></h3>
                                    <p align="center">The tutorials show you how to implement our <a href="https://www.nexmo.com/use-cases/" target="_blank">use cases</a> using Nexmo <a href="https://docs.nexmo.com/libraries">libraries</a></p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">
                                    <h3 align="center"><a href="https://docs.nexmo.com/libraries">Libraries</a></h3>
                                    <p align="center">Use the libraries developed for Nexmo APIs to easily integrate our products into your app</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>

        </div>
    </div>
</main>
<?php get_footer();?>
