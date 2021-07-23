<!DOCTYPE html>
<html lang="en">

<head>
	<title>Installation - DinoPHP Framework</title>
	<style>

        .menu-link {
            font-weight: bold;
        }
        ul {
            list-style: none;
        }
        .menu-docs {
            line-height: 2em;
        }

	</style>
	<?php echo $__env->make('links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php echo $__env->make('docs-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		<div class="col-lg">
            <a href="#how-to-install"><h3 style="font-weight: bold"><span class="hashtag">#</span> How to install ?</h3></a>
			<div id="how-to-install" style="margin-top: 5%;">

                <div id="install-windows">
                    <a href="#install-windows"><h4 style="font-weight: bold"><span class="hashtag">#</span> Getting started on Windows</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        You are ready to create your first Dinophp project. Launch Windows Terminal ( Git ) and begin a new terminal session. Next, you can use a simple terminal command to create a new Dinophp project. For example, to create a new Dinophp application in a directory named "DinoPHP", you may run the following command in your terminal
                    </p>
                    <div class="code">
                        composer create-project --prefer-dist ahmedibrahim/DinoPHP DinoPHP
                    </div>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Of course, you can change "DinoPHP" in this URL to anything you like. The Dinophp application's directory will be created within the directory you execute the command from.
                    </p>
                </div>
                <div id="install-macos">
                    <a href="#install-macos"><h4 style="font-weight: bold"><span class="hashtag">#</span> Getting started on MacOS</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                    Coming Soon. Please keep in touch !
                    </p>
                </div>
                <div id="install-linux">
                    <a href="#install-linux"><h4 style="font-weight: bold"><span class="hashtag">#</span> Getting started on Linux</h4></a>
                    <p style="font-size: 1rem;line-height: 1.8rem;color:#2b2e38">
                        Coming Soon. Please keep in touch !
                    </p>
                </div>
            </div>
		</div>
	</div>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</html><?php /**PATH C:\xampp\htdocs\DinoPHP-web\views/installation.blade.php ENDPATH**/ ?>