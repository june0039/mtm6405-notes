import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import Card from "../components/Card";
import Col from "../components/Col";
import Row from "../components/Row";

function Notes () {
  const [notes, setNotes] = useState([])
  const [filteredNotes, setFilteredNotes] = useState([])
  const [search, setSearch] = useState('')


  function submitHandler (e) {
    e.preventDefault()
  }

  function changeHandler (e) {
    setSearch(e.target.value)
  }

  useEffect(() => {
    fetch('http://mtm6405-notes.test/api/notes')
      .then(response => response.json())
      .then(json => setNotes(json))
  }, [])

  useEffect(() => {
    setFilteredNotes(notes.filter(note => 
      note.title.includes(search) || note.text.includes(search)
    ))
  }, [notes, search])

  return (
    <>
      <Row className="py-3 d-flex align-items-center">
        <Col className="col-9">
          <h1 className="display-4">Notes</h1>
        </Col>
        <Col className="col-3 text-end">
          <Link to="/create" className="text-decoration-none text-body">New</Link>
        </Col>
      </Row>
      <Row>
        <Col>
          <form className="form mb-3" onSubmit={submitHandler}>
            <input type="text" className="form-control" name="search" placeholder="Search" 
                value={search} 
                onChange={changeHandler} />
          </form>
        </Col>
      </Row>
      <Row>
        {filteredNotes.map(note => (
          <Col key={note.id} className="col-12 col-md-6 col-lg-4 mb-3">
            <Link className="text-decoration-none text-body" to={"/note/" + note.id}>
              <Card title={note.title} text={note.text} />
            </Link>
          </Col>
        ))}      
      </Row>
    </>
  )
}

export default Notes