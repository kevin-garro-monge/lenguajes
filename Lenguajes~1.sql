CREATE OR REPLACE PROCEDURE VER_EMPLEADOS_POR_REGION(EMPLEADOS NUMBER)
AS
BEGIN
  SELECT COUNT(EMPLOYEE_ID) FROM employees
  INNER JOIN departments
ON employees.department_id = departments.department_id
INNER JOIN locations
ON locations.location_id = departments.location_id
INNER JOIN countries
ON countries.country_id = locations.country_id
INNER JOIN REGIONS
ON regions.region_id = countries.region_id
WHERE departments.department_id = departments.location_id GROUP BY departments.department_id;
END;