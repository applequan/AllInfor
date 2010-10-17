/* 
 * AP(r) Computer Science GridWorld Case Study:
 * Copyright(c) 2002-2006 College Entrance Examination Board 
 * (http://www.collegeboard.com).
 *
 * This code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * @author DengQuanWen
 */
package info.gridworld.grid;
import java.util.*;
/**
 * A <code>SpraseBoundedGrid</code>  uses a “sparse array” implementation<br />
 * The implementation of this class is testable on the AP CS AB exam.
 */
public class SparseBoundedGrid<E> extends AbstractGrid<E>
{
	private 	ArrayList<LinkedList<OccupantInCol>> occupantArray;
	private int rown;
	private int coln;
	
	  /**
     * Constructs an empty bounded grid with the given dimensions.
     * (Precondition: <code>rows > 0</code> and <code>cols > 0</code>.)
     * @param rows number of rows in BoundedGrid
     * @param cols number of columns in BoundedGrid
     */
    public SparseBoundedGrid(int rows, int cols)
    {
        if (rows <= 0)
            throw new IllegalArgumentException("rows <= 0");
        if (cols <= 0)
            throw new IllegalArgumentException("cols <= 0");
        
        occupantArray=new ArrayList<LinkedList<OccupantInCol>>(rows);
        //for(LinkedList<OccupantInCol> tempCols:occupantArray)
        //tempCols= new LinkedList<OccupantInCol>();
        for(int i=0;i<rows;i++)
        	occupantArray.add(new LinkedList<OccupantInCol>());
        
        rown=rows;
        coln=cols;
    }
    public int getNumRows()
    {
        return rown;
    }

    public int getNumCols()
    {
        // Note: according to the constructor precondition, numRows() > 0, so
        // theGrid[0] is non-null.
        return coln;
    }

    public boolean isValid(Location loc)
    {
    	return 0 <= loc.getRow() && loc.getRow() < getNumRows()
        && 0 <= loc.getCol() && loc.getCol() < getNumCols();

    }
    public ArrayList<Location> getOccupiedLocations()
    {
    	 ArrayList<Location> theLocations = new ArrayList<Location>();
    	
    	 for(int i=0;i<rown;i++)
    	 {   LinkedList<OccupantInCol> tempCols=occupantArray.get(i);
	    	// If there's an object at this location, put it in the array.
	    	 if(tempCols.isEmpty())
	    		 continue;
	    	 
	    	 ListIterator<OccupantInCol> interator = tempCols.listIterator();	    	 
	    	 while (interator.hasNext())
		        	theLocations.add( new Location(i,interator.next().getCol()) );
	    	 
    	 }
         
         return theLocations;
    }
    public E get(Location loc)
    {
    	 if (!isValid(loc))
             throw new IllegalArgumentException("Location " + loc
                     + " is not valid");
    	 LinkedList<OccupantInCol> tempCols=occupantArray.get(loc.getRow());
    	 for( int i = 0 ; i < tempCols.size(); i++ )
	        	if(tempCols.get(i).getCol() == loc.getCol())
	        		return (E)tempCols.get(i).getObject();
	        return null;	        // unavoidable warning
    
    }
    public E put(Location loc, E obj)
    { if (!isValid(loc))
        throw new IllegalArgumentException("Location " + loc
                + " is not valid");
	    if (obj == null)
	        throw new NullPointerException("obj == null");
	
	    // Add the object to the grid.
	    
	    E oldOccupant = get(loc);
	    LinkedList<OccupantInCol> tempCols=occupantArray.get(loc.getRow());
	    if(oldOccupant!=null)
	    { for( int i = 0 ; i < tempCols.size(); i++ )
	    	if(tempCols.get(i).getCol() == loc.getCol())
		    	{tempCols.get(i).setObject(obj);
		    		break;
		    	}    	
	    }
	    else    
	    	tempCols.add(new OccupantInCol(obj,loc.getCol()));    
	  
	    return oldOccupant;    	
    }
    
    public E remove(Location loc)
    {
        if (!isValid(loc))
            throw new IllegalArgumentException("Location " + loc
                    + " is not valid");
        
        // Remove the object from the grid.
        E oldOccupant = get(loc);
        LinkedList<OccupantInCol> tempCols=occupantArray.get(loc.getRow());
        if(oldOccupant!=null)
        { for( int i = 0 ; i < tempCols.size(); i++ )
        	if(tempCols.get(i).getCol() == loc.getCol())
        		{tempCols.remove(i);        		
        		break;
        		}
        		
        }
        return oldOccupant;
    }
    
    
    
    public class OccupantInCol
    {
	    	private Object occupant;
	    	private int col;
	    	
	    	public OccupantInCol(Object obj,int c)
	    	{
	    		occupant=obj;
	    		col=c;
	    	}
			public int getCol()
			{
				return col;			
			}    	
			public Object getObject()
			{
				return occupant;
			}
			public void setObject(Object obj)
			{
				occupant=obj;
			}
    
   }
}