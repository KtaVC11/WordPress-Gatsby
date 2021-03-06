<?php

namespace WPGraphQL\Type\InterfaceType;

use WPGraphQL\Model\Post;
use WPGraphQL\Model\Term;
use WPGraphQL\Model\User;
use WPGraphQL\Registry\TypeRegistry;

class UniformResourceIdentifiable {
	public static function register_type( TypeRegistry $type_registry ) {
		register_graphql_interface_type(
			'UniformResourceIdentifiable',
			[
				'description' => __( 'Any node that has a URI', 'wp-graphql' ),
				'fields'      => [
					'uri'        => [
						'type'        => [ 'non_null' => 'String' ],
						'description' => __( 'The unique resource identifier path', 'wp-graphql' ),
					],
					'id'         => [
						'type'        => [ 'non_null' => 'ID' ],
						'description' => __( 'The unique resource identifier path', 'wp-graphql' ),
					],
					'databaseId' => [
						'type'        => [ 'non_null' => 'Int' ],
						'description' => __( 'The unique resource identifier path', 'wp-graphql' ),
					],
				],
				'resolveType' => function( $node ) use ( $type_registry ) {

					switch ( true ) {
						case $node instanceof Post:
							$type = $type_registry->get_type( get_post_type_object( $node->post_type )->graphql_single_name );
							break;
						case $node instanceof Term:
							$type = $type_registry->get_type( get_taxonomy( $node->taxonomyName )->graphql_single_name );
							break;

						case $node instanceof User:
							$type = $type_registry->get_type( 'User' );
							break;
						default:
							$type = null;
					}

					return $type;

				},
			]
		);
	}
}
