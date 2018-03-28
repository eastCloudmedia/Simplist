    <div class="Container">
        <div class="row">
            <div class="col">
                <div style="text-align: center;vertical-align: middle;margin-bottom: 50px;margin-top: 50px;">
                    <a href="https://simplist.ir">
                        <img src="https://simplist.ir/Content/Shared/Logo.png" class="" style="" alt="Simplist" width="100px"
                             height="100px">
                    </a>
                    <div class="MainText ">WELCOME TO SIMPLIST</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col SubText PurpText FitLayout">
                <br>
                <div class="SubText PurpText FitLayout">Our group is <a href="https://eastcloud.ir" target="_blank"
                                                                        class="DefinedRoya PurpStyle">estCloud LLC.</a>
                    and your
                    trust
                    made us happy.
                </div>
                <div class="col SubText PurpText FitLayout">You can download our the project from <a
                            href="https://github.com/miladxandi/Simplist" class="PurpStyle" target="_blank"> our
                        Github </a> and
                    stay connected with us.
                </div>
                <div class="col SubText PurpText FitLayout">What is <span
                            style="color: #9756B3;font-weight: bold">Simplist</span>?<a
                            href="/Aboutus" class="PurpStyle"> Read More </a></div>
                </br>
                <a href="Documentation">
                    <button type="button" class="btn btn-outline-secondary">Get Strated</button>
                </a>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col SubText PurpText FitLayout">
                <div class="Container">
                    <div class="row">
                        <?php
                        $Data = new \Model\Repository\MainFunction\PostRepository();
                        $IMG = 1;
                        $Posts = $Data->GetPost();
                        $Add = new Core\Requirement\oLoad("../../..", "Style/Main", "Script/Main", "Content/Main");
                        foreach ($Posts as $Post): ?>
                            <div class="col-12">
                                <div class="jumbotron">
                                    <a href="/Posts/?url=<?php echo $Post['Post_Url'] ?>">
                                        <?php if (isset($Post['Post_Image']) && ($Post['Post_Image'] != null || $Post['Post_Image'] != "")) {
                                            $Add->Loader("png", $Post['Post_Image'], "Shared", true, false, $Post['Post_Name'], 300, 200);
                                        } else {
                                            $Add->Loader("png", "SimplistV2", "Shared", true, false, $Post['Post_Name'], 300, 200);
                                        }

                                        ?>
                                    </a>

                                    <h1 class="display-4 PostTitle"><?php echo $Post['Post_Name'] ?></h1>
                                    <p class="lead PostContent"><?php echo $Post['Post_Summary'] ?></p>
                                    <hr class="my-4 ">
                                    <p class="PostAuthor">نویسنده: <?php echo $Post['Post_Author'] ?></p>
                                    <p class="lead">
                                        <a class="btn btn-primary btn-lg"
                                           href="/Posts/?url=<?php echo $Post['Post_Url'] ?>"
                                           role="button">Learn more</a>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>