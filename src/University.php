<?php

declare(strict_types=1);

namespace Rinvex\University;

use Exception;

class University
{
    /**
     * The attributes array.
     *
     * @var array
     */
    protected $attributes;

    /**
     * Create a new University instance.
     *
     * @param array $attributes
     *
     * @throws \Exception
     */
    public function __construct($attributes)
    {
        // Set the attributes
        $this->setAttributes($attributes);

        // Check required mandatory attributes
        if (empty($this->getName()) || empty($this->getCountry())) {
            throw new Exception('Missing mandatory university attributes!');
        }
    }

    /**
     * Set the attributes.
     *
     * @param array $attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get the attributes.
     *
     * @return array|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }

    /**
     * Set single attribute.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return $this
     */
    public function set($key, $value)
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    /**
     * Get an item from attributes array using "dot" notation.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        $array = $this->attributes;

        if (is_null($key)) {
            return $array;
        }

        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        foreach (explode('.', $key) as $segment) {
            if (is_array($array) && array_key_exists($segment, $array)) {
                $array = $array[$segment];
            } else {
                return $default;
            }
        }

        return $array;
    }

    /**
     * Get the name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name');
    }

    /**
     * Get the alternative name.
     *
     * @return string|null
     */
    public function getAltName(): ?string
    {
        return $this->get('alt_name');
    }

    /**
     * Get the country.
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->get('country');
    }

    /**
     * Get the state.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->get('state');
    }

    /**
     * Get the address.
     *
     * @return array|null
     */
    public function getAddress(): ?array
    {
        return $this->get('address');
    }

    /**
     * Get the street.
     *
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->get('address.street');
    }

    /**
     * Get the city.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->get('address.city');
    }

    /**
     * Get the province.
     *
     * @return string|null
     */
    public function getProvince(): ?string
    {
        return $this->get('address.province');
    }

    /**
     * Get the postal code.
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->get('address.postal_code');
    }

    /**
     * Get the contact.
     *
     * @return array|null
     */
    public function getContact(): ?array
    {
        return $this->get('contact');
    }

    /**
     * Get the telephone.
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->get('contact.telephone');
    }

    /**
     * Get the website.
     *
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->get('contact.website');
    }

    /**
     * Get the email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->get('contact.email');
    }

    /**
     * Get the fax.
     *
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->get('contact.fax');
    }

    /**
     * Get the funding.
     *
     * @return string|null
     */
    public function getFunding(): ?string
    {
        return $this->get('funding');
    }

    /**
     * Get the languages.
     *
     * @return array|null
     */
    public function getLanguages(): ?array
    {
        return $this->get('languages');
    }

    /**
     * Get the academic year.
     *
     * @return string|null
     */
    public function getAcademicYear(): ?string
    {
        return $this->get('academic_year');
    }

    /**
     * Get the accrediting agency.
     *
     * @return string|null
     */
    public function getAccreditingAgency(): ?string
    {
        return $this->get('accrediting_agency');
    }
}
