<!DOCKTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Detail</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
	<div class="header">
        <?php include 'header.php'; ?>
	</div>
        <div class="container-fluid text-left">
            <div class="row justify-content-center align-items-start bg-light" style="padding-top: 128px">
                <div class="col-sm-4">
                    <h1>Feature that is amazing</h1>
                    <div class="space"></div>
                    <p class="text3">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <ul>
                        <li class="marg">Benefit of Feature</li>
                        <li class="marg">Benefit of Feature</li>
                        <li class="marg">Benefit of Feature</li>
                    </ul>
                    <div class="space"></div>
                    <button class="btn btn-warning col-6">Buy</button>
                    <div class="space"></div>
                </div>
                <div class="col-sm-4">
                    <img src="img/moto4.png" class="rounded" alt="4">
                </div>
            </div>
        </div>

        <div class="container-fluid text-left">

            <div class="row justify-content-center">

                <div class="col-8">
                    <h1>Value Propositipon</h1>
                    <table class="table table-bordered" style="max-width: 1167px">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" style="width: 306px">Value Name</th>
                                <th scope="col" style="width: 861px">Property</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First value proposition</td>
                                <td>First Property proposition</td>
                            </tr>
                            <tr>
                                <td>Second value proposition</td>
                                <td>Second Property proposition</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-center" colspan="2">Addinational Property</th>
                            </tr>
                            <tr>
                                <td>First value proposition</td>
                                <td>First Property proposition</td>
                            </tr>
                            <tr>
                                <td>Second value proposition</td>
                                <td>Second Property proposition</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-lg btn-warning col-3 mt-5">Buy</button>
                </div>
            </div>
		</div>
        <div class="sites"><?php include 'sites.php'; ?></div>
		<div class="footer"><?php include 'footer.php'; ?></div>

    </body>
</html>