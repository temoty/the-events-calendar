<?php

namespace Tribe\Events\Views\V2\Partials\Components\Events_Bar;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class FiltersTest extends HtmlPartialTestCase
{

	protected $partial_path = 'components/events-bar/filters';

	/**
	 * Test render
	 */
	public function test_render() {
		$this->assertMatchesSnapshot( $this->get_partial_html() );
	}
}
