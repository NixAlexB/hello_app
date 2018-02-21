<?php
// [issue 12](https://github.com/there4/slim-unit-testing-example/issues/12)
class ReferrerTest extends LocalWebTestCase
{
    public function testCanSetReferrer()
    {

        $referer = array('HTTP_REFERER' => 'hello');
        $this->client->get('/hello/some_name', array(), $referer);
        $this->assertEquals('{"hostname":"hello","name":"some_name"}', $this->client->response->body());
    }
}
/* End of file ReferrerTest.php */
