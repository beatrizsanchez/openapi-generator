<?php
/**
 * AbstractUserApi
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPIServer\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * OpenAPI spec version: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer\Api;

/**
 * AbstractUserApi Class Doc Comment
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPIServer\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
abstract class AbstractUserApi
{

    /**
     * @var \Interop\Container\ContainerInterface Slim app container instance
     */
    protected $container;

    /**
     * Route Controller constructor receives container
     *
     * @param \Interop\Container\ContainerInterface $container Slim app container instance
     */
    public function __construct($container)
    {
        $this->container = $container;
    }


    /**
     * POST createUser
     * Summary: Create user
     * Notes: This can only be done by the logged in user.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createUser($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $message = "How about implementing createUser as a POST method in OpenAPIServer\Api\UserApi class?";
        throw new \Exception($message);

        return $response->write($message)->withStatus(501);
    }

    /**
     * POST createUsersWithArrayInput
     * Summary: Creates list of users with given input array
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createUsersWithArrayInput($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $message = "How about implementing createUsersWithArrayInput as a POST method in OpenAPIServer\Api\UserApi class?";
        throw new \Exception($message);

        return $response->write($message)->withStatus(501);
    }

    /**
     * POST createUsersWithListInput
     * Summary: Creates list of users with given input array
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createUsersWithListInput($request, $response, $args)
    {
        $body = $request->getParsedBody();
        $message = "How about implementing createUsersWithListInput as a POST method in OpenAPIServer\Api\UserApi class?";
        throw new \Exception($message);

        return $response->write($message)->withStatus(501);
    }

    /**
     * DELETE deleteUser
     * Summary: Delete user
     * Notes: This can only be done by the logged in user.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function deleteUser($request, $response, $args)
    {
        $username = $args['username'];
        $message = "How about implementing deleteUser as a DELETE method in OpenAPIServer\Api\UserApi class?";
        throw new \Exception($message);

        return $response->write($message)->withStatus(501);
    }

    /**
     * GET getUserByName
     * Summary: Get user by user name
     * Output-Formats: [application/xml, application/json]
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getUserByName($request, $response, $args)
    {
        $username = $args['username'];
        $message = "How about implementing getUserByName as a GET method in OpenAPIServer\Api\UserApi class?";
        throw new \Exception($message);

        return $response->write($message)->withStatus(501);
    }

    /**
     * GET loginUser
     * Summary: Logs user into the system
     * Output-Formats: [application/xml, application/json]
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function loginUser($request, $response, $args)
    {
        $queryParams = $request->getQueryParams();
        $username = $request->getQueryParam('username');
        $password = $request->getQueryParam('password');
        $message = "How about implementing loginUser as a GET method in OpenAPIServer\Api\UserApi class?";
        throw new \Exception($message);

        return $response->write($message)->withStatus(501);
    }

    /**
     * GET logoutUser
     * Summary: Logs out current logged in user session
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function logoutUser($request, $response, $args)
    {
        $message = "How about implementing logoutUser as a GET method in OpenAPIServer\Api\UserApi class?";
        throw new \Exception($message);

        return $response->write($message)->withStatus(501);
    }

    /**
     * PUT updateUser
     * Summary: Updated user
     * Notes: This can only be done by the logged in user.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request  Request
     * @param \Psr\Http\Message\ResponseInterface      $response Response
     * @param array|null                               $args     Path arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function updateUser($request, $response, $args)
    {
        $username = $args['username'];
        $body = $request->getParsedBody();
        $message = "How about implementing updateUser as a PUT method in OpenAPIServer\Api\UserApi class?";
        throw new \Exception($message);

        return $response->write($message)->withStatus(501);
    }
}
