<?php

use Mockery as m;
use Way\Tests\Factory;

class ConsorcioxmapasTest extends TestCase {

	public function __construct()
	{
		$this->mock = m::mock('Eloquent', 'Consorcioxmapa');
		$this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
	}

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::consorcioxmapa(['id' => 1]);
		$this->app->instance('Consorcioxmapa', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once()->andReturn($this->collection);
		$this->call('GET', 'consorcioxmapas');

		$this->assertViewHas('consorcioxmapas');
	}

	public function testCreate()
	{
		$this->call('GET', 'consorcioxmapas/create');

		$this->assertResponseOk();
	}

	public function testStore()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(true);
		$this->call('POST', 'consorcioxmapas');

		$this->assertRedirectedToRoute('consorcioxmapas.index');
	}

	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(false);
		$this->call('POST', 'consorcioxmapas');

		$this->assertRedirectedToRoute('consorcioxmapas.create');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testShow()
	{
		$this->mock->shouldReceive('findOrFail')
				   ->with(1)
				   ->once()
				   ->andReturn($this->attributes);

		$this->call('GET', 'consorcioxmapas/1');

		$this->assertViewHas('consorcioxmapa');
	}

	public function testEdit()
	{
		$this->collection->id = 1;
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->once()
				   ->andReturn($this->collection);

		$this->call('GET', 'consorcioxmapas/1/edit');

		$this->assertViewHas('consorcioxmapa');
	}

	public function testUpdate()
	{
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->andReturn(m::mock(['update' => true]));

		$this->validate(true);
		$this->call('PATCH', 'consorcioxmapas/1');

		$this->assertRedirectedTo('consorcioxmapas/1');
	}

	public function testUpdateFails()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
		$this->validate(false);
		$this->call('PATCH', 'consorcioxmapas/1');

		$this->assertRedirectedTo('consorcioxmapas/1/edit');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testDestroy()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

		$this->call('DELETE', 'consorcioxmapas/1');
	}

	protected function validate($bool)
	{
		Validator::shouldReceive('make')
				->once()
				->andReturn(m::mock(['passes' => $bool]));
	}
}
