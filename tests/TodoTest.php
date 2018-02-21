<?php
// [issue 12](https://github.com/there4/slim-unit-testing-example/issues/12)
class ReferrerTest extends LocalWebTestCase
{
    public function testCanSetReferrer()
    {

        $this->client->get('/hello/some_name');
        $hostname = gethostname();
        $this->assertEquals(json_encode(array('message' => "Hello some_name from $hostname")), $this->client->response->body());
    }
}
/* End of file ReferrerTest.php */
