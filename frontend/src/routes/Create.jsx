import { useState } from "react";
import { Link, useNavigate } from "react-router-dom";
import Col from "../components/Col";
import Row from "../components/Row";

function Create () {
  const navigate = useNavigate()
  const [note, setNote] = useState({
    title: '',
    text: ''
  })

  function changeHandler (e) {
    setNote({
      ...note,
      [e.target.name]: e.target.value
    })
  }

  function submitHandler (e) {
    e.preventDefault()

    fetch('http://mtm6405-notes.test/api/notes', {
        method: 'POST',
        body: JSON.stringify({
          title: note.title,
          text: note.text
        }),
        headers: {
          'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(note => navigate('/note/' + note.id))
  }
  return (
    <>
      <Row className="my-5 d-flex align-items-center">
        <Col className="col-9">
          <h1 className="display-4">New Note</h1>
        </Col>
      </Row>
      <Row>
        <Col>
          <form className="form mb-3 d-flex flex-column bg-light p-5" onSubmit={submitHandler}>
            <label htmlFor="title" className="form-label">Title</label>
            <input type="text" 
              className="form-control mb-3" 
              name="title" 
              value={note.title} 
              onChange={changeHandler} />

            <label htmlFor="text" className="form-label">Text</label>
            <textarea 
              className="form-control mb-3" 
              name="text" 
              value={note.text}
              onChange={changeHandler}></textarea>

            <div className="align-self-end">
              <Link to="/" className="btn btn-secondary me-3">Cancel</Link>
              <button className="btn btn-primary">Add Note</button>
            </div>
          </form>
        </Col>
      </Row>
    </>
  )
}

export default Create