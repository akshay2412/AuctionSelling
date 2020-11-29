node {
 
   stage('SCM Checkout'){
	git branch: 'main', 
	//credentialsId: 'github', 
	url: 'https://github.com/akshay2412/AuctionSelling.git'   
        
   
   }
       stage('Configure') {
        def defaultConfigure = '--with-openssl --enable-mbstring --with-zlib --enable-zip --without-pear';
        bat('buildconf --force');
        def debugConfigure = '--enable-debug';
        if(DEBUG != 'true') {
            debugConfigure = '';
        }
        def ztsConfigure = '--enable-maintainer-zts';
        if(MAINTAINERZTS != 'true') {
            ztsConfigure = '';
        }
        bat("./configure --prefix=${WORKSPACE}/php-install ${defaultConfigure} ${debugConfigure} ${ztsConfigure}");
    }

    stage('Build') {
        bat('make -j2');
        bat('make install');
    }
    stage('JMD')
	{
		echo "Succeessfull"
	}

}
