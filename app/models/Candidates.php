<?php

/**
 * @Entity
 * @Table(name="candidates")
 */
class Candidates
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * @Column(type="text")
     */
    private $about;

    /**
     * @Column(type="datetime", nullable=true, options={"default":0})
     */
    private $created_at;

    /**
     * Holds name of the avatar image, avatars are uploaded to special folder
     * @Column(type="string", nullable=true)
     */
    private $avatar_name;
}