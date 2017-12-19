Feature: Add Electronic

<<<<<<< HEAD
  Scenario:
    Given I have the electronics:
    """
    [
    {
        "id": 1,
        "brand": "Samsung",
        "model": "cel mai  nou",
        "price": 22222
    },
    {
        "id": 2,
        "brand": "Sony",
        "model": "Bravia",
        "price": 32222
    }
    ]
    """
    When I request "get /electronics"
    Then the response status code should be 200
    And the "content-type" header should be "application/json"
    And the body should contain :
    """
    [
    {
    "id": 1,
    "brand": "Samsung",
    "model": "cel mai  nou",
    "price": 22222
    },
    {
    "id": 2,
    "brand": "Sony",
    "model": "Bravia",
    "price": 32222
    }
    ]
    """
=======

  Scenario: User get electronic by id
    Given there are electronics:
      | id | brand   | model  | price |
      | 1  | Samsung | a2e300 |  123  |
      | 2  | Sony    | bravia |  324  |
    When I am on "/electronics/1"
    When I need  one "1" from electronics
    Then It should return :| 1  | Samsung | a2e300 |  123  | more electronic in electronics
>>>>>>> 0c3df5406102d4009c6765f8ea2f4f4ce8be3134
