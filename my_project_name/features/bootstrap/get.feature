Feature: GetElectronics

  Scenario:
    When I request "GET /electronics"
    Then the response status code should be 200
    And the "content-type" header should be "application/json"

  Scenario:
    When I request "GET /electronics?filter=Samsung"
    Then the response status code should be 200
    And the "content-type" header should be "application/json"

  Scenario:
    When I request "GET /electronics?filter=eroare"
    Then the response status code should be 204

  Scenario:
    When I request "GET /electronics/1"
    Then the response status code should be 200
    And the "content-type" header should be "application/json"
    And the body should contain :
    """
    {"id":1,"brand":"Samsung","model":"cel mai  nou","price":22222}
    """

