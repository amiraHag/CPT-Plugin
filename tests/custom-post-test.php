<?php
/**
 * Class CustomPostTest
 *
 * @package CPT-Plugin
 */

/**
 * Custom Post test case.
 */
class CustomPostTest extends WP_UnitTestCase {

	/**
		 * Holds post id.
		 *
		 * @var int
		 */
		private $postId;

	/**
	 * Test Case for adding the custom post.
	 */
	function test_create_custom_post() {

		$this->postId = $this->factory->post->create([
				'post_title' => 'Main Options',
				'post_status' => 'publish',
				'post_type' => 'option',
		]);

	}

	/**
       * Delete the post after the test finished.
       */
     public function test_delete_custom_post()
     {

          wp_delete_post($this->postId);
     }

}
