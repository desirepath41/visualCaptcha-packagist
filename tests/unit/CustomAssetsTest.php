<?php

class CustomAssetsTest extends visualCaptcha_TestCase {
    public function testCustomAssets() {
        $assetsPath = __DIR__ . '/../fixture';

        $captcha = new \visualCaptcha\Captcha( $this->session, $assetsPath );

        $this->assertCount( 2, $captcha->getAllImageOptions() );
        $this->assertEquals( 'Cat', $captcha->getAllImageOptions()[ 0 ][ 'name' ] );

        $this->assertCount( 2, $captcha->getAllAudioOptions() );
        $this->assertEquals( '4plus1.mp3', $captcha->getAllAudioOptions()[ 0 ][ 'path' ] );
    }
}

?>