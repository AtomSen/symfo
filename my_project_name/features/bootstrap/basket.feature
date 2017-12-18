Feature: Add Electronic

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